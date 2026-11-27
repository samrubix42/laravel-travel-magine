@props(['kicker', 'title', 'cta' => 'View all', 'href' => '#'])

{{-- Section heading: fine top rule, green eyebrow, condensed display title and a quiet text link. --}}
<div class="mb-8 flex items-end justify-between gap-6 border-t border-ink pt-4">
    <div>
        <p class="eyebrow text-success">{{ $kicker }}</p>
        <h2 class="mt-1.5 font-display text-[28px] leading-[1.25] uppercase sm:text-[36px]">{{ $title }}</h2>
    </div>
    @if ($cta)
        <a href="{{ $href }}" class="shrink-0 pb-1.5 text-sm text-accent hover:underline">{{ $cta }} →</a>
    @endif
</div>
