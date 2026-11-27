<section class="mx-auto max-w-[1200px] px-4 py-10 sm:px-6 sm:py-15">
    <x-section-heading kicker="Explore by destination" title="Where to next?" cta="All destinations" />

    <div class="grid grid-cols-2 gap-x-5 gap-y-8 md:grid-cols-3">
        @foreach ($destinations as $i => $place)
            <x-reveal :delay="($i % 3) * 80">
                <a href="#" class="group block">
                    <div class="aspect-[4/3] overflow-hidden rounded-lg bg-paper">
                        <x-img
                            :src="$place['image']"
                            :alt="$place['name'].', '.$place['country']"
                            sizes="(min-width: 768px) 380px, 50vw"
                            class="card-img"
                        />
                    </div>
                    <div class="mt-3 flex items-baseline justify-between gap-3">
                        <h3 class="font-serif text-2xl font-medium group-hover:underline group-hover:decoration-1 group-hover:underline-offset-4">{{ $place['name'] }}</h3>
                        <span class="text-xs text-muted">{{ $place['stories'] }} stories</span>
                    </div>
                    <p class="text-sm text-subtle">{{ $place['country'] }}</p>
                </a>
            </x-reveal>
        @endforeach
    </div>
</section>
