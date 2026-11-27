<?php

namespace App\Support;

use Illuminate\Support\Facades\File;
use RuntimeException;

/**
 * Resolves srcset data for images produced by `php artisan images:optimize`.
 *
 * Content refers to images by their source path (e.g. "images/hero-bali.jpg");
 * this maps that to the generated WebP sizes in public/images.
 */
class ResponsiveImage
{
    /** @var array<string, array{width: int, height: int, widths: list<int>}>|null */
    private static ?array $manifest = null;

    public static function manifestPath(): string
    {
        return public_path('images/manifest.json');
    }

    /**
     * @return array{src: string, srcset: string, width: int, height: int}
     */
    public static function for(string $path): array
    {
        $name = pathinfo($path, PATHINFO_FILENAME);
        $entry = self::manifest()[$name] ?? throw new RuntimeException(
            "Image [{$name}] is missing. Add it to resources/images and run `php artisan images:optimize`."
        );

        $srcset = collect($entry['widths'])
            ->map(fn (int $w): string => asset("images/{$name}-{$w}.webp")." {$w}w")
            ->implode(', ');

        // Fallback src for browsers without srcset support: the mid-size variant.
        $fallback = collect($entry['widths'])->first(fn (int $w): bool => $w >= 960) ?? last($entry['widths']);

        return [
            'src' => asset("images/{$name}-{$fallback}.webp"),
            'srcset' => $srcset,
            'width' => $entry['width'],
            'height' => $entry['height'],
        ];
    }

    /**
     * @return array<string, array{width: int, height: int, widths: list<int>}>
     */
    private static function manifest(): array
    {
        if (self::$manifest === null) {
            $path = self::manifestPath();

            if (! File::exists($path)) {
                throw new RuntimeException('Image manifest not found. Run `php artisan images:optimize`.');
            }

            self::$manifest = json_decode(File::get($path), true);
        }

        return self::$manifest;
    }
}
