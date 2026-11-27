<x-layouts::app :lcp-image="$heroStories[0]['image']">
    @include('home.header')

    <main class="flex-1">
        @include('home.hero')
        @include('home.ticker')
        @include('home.latest')
        @include('home.destinations')
        @include('home.big-list')

        {{-- Inspiration — category filtering handled by a Livewire component --}}
        <section class="mx-auto max-w-[1200px] px-4 py-10 sm:px-6 sm:py-15">
            <x-section-heading kicker="Get inspired" title="Ideas for your next trip" :cta="null" />
            <livewire:inspiration-tabs />
        </section>

        @include('home.guides')

        {{-- Newsletter — Livewire form with server-side validation --}}
        <section id="newsletter" class="scroll-mt-6 mx-auto max-w-[1200px] px-4 pb-15 sm:px-6">
            <div class="grid items-center gap-8 rounded-lg border border-line px-6 py-10 sm:px-10 lg:grid-cols-2 lg:gap-15">
                <div>
                    <p class="eyebrow text-success">Newsletter</p>
                    <h2 class="mt-2 font-serif text-[36px] leading-[1.1] font-medium sm:text-[44px]">The Sunday Postcard</h2>
                    <p class="mt-3 max-w-md font-serif text-xl leading-[1.5] text-ink/80">
                        Our best stories, insider tips and travel deals — one email, every Sunday morning.
                    </p>
                </div>
                <livewire:newsletter-signup />
            </div>
        </section>
    </main>

    @include('home.footer')
</x-layouts::app>
