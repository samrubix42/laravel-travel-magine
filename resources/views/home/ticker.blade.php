{{-- Trending topics: a quiet, scrollable row of chips between fine rules. --}}
<div class="border-y border-line">
    <div class="no-scrollbar mx-auto flex max-w-[1200px] items-center gap-3 overflow-x-auto px-4 py-3 sm:px-6">
        <span class="eyebrow shrink-0 pr-2 text-success">Trending now</span>
        @foreach ($trending as $topic)
            <a href="#" class="shrink-0 rounded-full border border-line px-2.5 py-1 text-xs font-medium whitespace-nowrap transition hover:border-ink">{{ $topic }}</a>
        @endforeach
    </div>
</div>
