@php($nav = ['Destinations', 'Inspiration', 'Food & Drink', 'Hotels', 'Guides', 'Video'])

<header x-data="{ open: false }" class="bg-surface">
    {{-- Utility row --}}
    <div class="border-b border-line">
        <div class="mx-auto flex h-10 max-w-[1200px] items-center justify-between gap-4 px-4 text-[13px] text-subtle sm:px-6">
            <p>{{ now()->format('l, j F Y') }}</p>
            <div class="flex items-center gap-5">
                <a href="#" class="hidden hover:text-ink sm:inline">Print edition</a>
                <a href="#" class="hidden hover:text-ink sm:inline">Advertise</a>
                <a href="#newsletter" class="font-medium text-ink hover:underline">Subscribe</a>
            </div>
        </div>
    </div>

    {{-- Masthead --}}
    <div class="mx-auto flex max-w-[1200px] items-center justify-between gap-4 px-4 py-6 sm:px-6 sm:py-8">
        <button
            type="button"
            @click="open = !open"
            class="flex h-10 w-10 items-center justify-center lg:invisible"
            :aria-label="open ? 'Close menu' : 'Open menu'"
            :aria-expanded="open.toString()"
        >
            <svg x-show="!open" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M3 6h18M3 12h18M3 18h18" /></svg>
            <svg x-cloak x-show="open" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18" /></svg>
        </button>

        <a href="{{ route('home') }}" class="flex items-baseline gap-2 leading-none">
            <span class="font-display text-[34px] uppercase sm:text-[52px]">Travel</span>
            <span class="font-serif text-[36px] font-medium sm:text-[56px]">Magine</span>
        </a>

        <button type="button" aria-label="Search" class="flex h-10 w-10 items-center justify-center">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                <circle cx="11" cy="11" r="7" />
                <path d="m20 20-3.5-3.5" />
            </svg>
        </button>
    </div>

    {{-- Navigation row (desktop) --}}
    <nav class="hidden border-y border-line lg:block" aria-label="Main">
        <div class="mx-auto flex h-12 max-w-[1200px] items-center justify-center gap-10 px-6">
            @foreach ($nav as $item)
                <a href="#" class="text-[13px] font-medium tracking-[0.04em] uppercase hover:text-accent">{{ $item }}</a>
            @endforeach
        </div>
    </nav>

    {{-- Mobile menu --}}
    <nav x-cloak x-show="open" x-transition.opacity class="border-y border-line px-4 sm:px-6 lg:hidden" aria-label="Mobile">
        @foreach ($nav as $item)
            <a href="#" @click="open = false" class="block border-b border-line py-3 text-[15px] last:border-b-0">{{ $item }}</a>
        @endforeach
    </nav>
    <div class="border-b border-line lg:hidden" x-show="!open"></div>
</header>
