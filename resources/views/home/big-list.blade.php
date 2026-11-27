<section class="mx-auto max-w-[1200px] px-4 py-10 sm:px-6 sm:py-15">
    <div class="grid items-center gap-8 border-y border-line py-10 lg:grid-cols-2 lg:gap-15">
        <x-reveal>
            <div class="aspect-[4/3] overflow-hidden rounded-lg bg-paper">
                <x-img :src="$featureBanner['image']" alt="Mountain range at sunrise" sizes="(min-width: 1024px) 570px, 100vw" class="card-img" />
            </div>
        </x-reveal>

        <x-reveal :delay="100">
            <p class="eyebrow text-success">{{ $featureBanner['kicker'] }}</p>
            <h2 class="mt-2 flex items-baseline gap-3">
                <span class="font-display text-[64px] leading-none">{{ $featureBanner['count'] }}</span>
                <span class="font-serif text-[36px] leading-[1.1] font-medium sm:text-[44px]">Places to go in 2027</span>
            </h2>
            <p class="mt-4 font-serif text-xl leading-[1.5] text-ink/80">{{ $featureBanner['excerpt'] }}</p>

            <ol class="mt-6 divide-y divide-line border-y border-line">
                @foreach ($featureBanner['picks'] as $i => $pick)
                    <li>
                        <a href="#" class="group flex items-center gap-4 py-3">
                            <span class="w-6 font-display text-xl text-subtle">{{ $i + 1 }}</span>
                            <span class="flex-1">
                                <span class="block font-medium group-hover:underline group-hover:underline-offset-4">{{ $pick['place'] }}</span>
                                <span class="block text-sm text-subtle">{{ $pick['country'] }}</span>
                            </span>
                            <x-arrow :size="14" class="text-subtle transition group-hover:text-ink" />
                        </a>
                    </li>
                @endforeach
            </ol>

            <a href="#" class="btn mt-6">Read the full list <x-arrow :size="14" /></a>
        </x-reveal>
    </div>
</section>
