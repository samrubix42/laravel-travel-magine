<?php

namespace App\Console\Commands;

use App\Support\ResponsiveImage;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

#[Signature('images:optimize {--force : Regenerate files even if they are up to date}')]
#[Description('Convert resources/images/*.jpg into responsive WebP files in public/images')]
class OptimizeImages extends Command
{
    /** Output widths; only those smaller than the source (plus the source width) are generated. */
    private const WIDTHS = [480, 960, 1440, 2000];

    private const QUALITY = 78;

    public function handle(): int
    {
        $sources = File::glob(resource_path('images/*.{jpg,jpeg,png}'), GLOB_BRACE);
        $outDir = public_path('images');
        File::ensureDirectoryExists($outDir);

        $manifest = [];
        $before = 0;
        $after = 0;

        foreach ($sources as $source) {
            $name = pathinfo($source, PATHINFO_FILENAME);
            [$width, $height] = getimagesize($source);
            $image = str_ends_with(strtolower($source), '.png') ? imagecreatefrompng($source) : imagecreatefromjpeg($source);

            $widths = array_values(array_filter(self::WIDTHS, fn (int $w): bool => $w < $width));
            $widths[] = min($width, max(self::WIDTHS));
            $widths = array_values(array_unique($widths));

            foreach ($widths as $w) {
                $target = "{$outDir}/{$name}-{$w}.webp";

                if ($this->option('force') || ! File::exists($target) || File::lastModified($target) < File::lastModified($source)) {
                    $resized = $w === $width ? $image : imagescale($image, $w, (int) round($height * $w / $width), IMG_BICUBIC);
                    imagewebp($resized, $target, self::QUALITY);

                    if ($resized !== $image) {
                        imagedestroy($resized);
                    }
                }

                $after += File::size($target);
            }

            imagedestroy($image);
            $before += File::size($source);

            $manifest[$name] = ['width' => $width, 'height' => $height, 'widths' => $widths];
        }

        File::put(ResponsiveImage::manifestPath(), json_encode($manifest, JSON_PRETTY_PRINT));

        $this->components->info(sprintf(
            'Optimized %d images into %d WebP files (%s of sources → %s total across all sizes).',
            count($manifest),
            array_sum(array_map(fn (array $m): int => count($m['widths']), $manifest)),
            $this->kb($before),
            $this->kb($after),
        ));

        return self::SUCCESS;
    }

    private function kb(int $bytes): string
    {
        return number_format($bytes / 1024).' KB';
    }
}
