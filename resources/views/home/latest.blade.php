@php($lead = $latest[0])
@php($rest = array_slice($latest, 1))

<section class="mx-auto max-w-[1200px] px-4 py-10 sm:px-6 sm:py-15">
    <x-section-heading kicker="Fresh off the press" title="Latest stories" />

    <div class="grid gap-7.5 lg:grid-cols-12">
        <x-reveal class="lg:col-span-7">
            <a href="#" class="card group">
                <div class="aspect-[3/2] overflow-hidden rounded-md bg-paper">
                    <x-img :src="$lead['image']" sizes="(min-width: 1024px) 660px, 100vw" class="card-img" />
                </div>
                <p class="eyebrow mt-4 text-success">{{ $lead['category'] }} · {{ $lead['location'] }}</p>
                <h3 class="mt-2 font-serif text-[30px] leading-[1.2] font-medium group-hover:underline group-hover:decoration-1 group-hover:underline-offset-4">
                    {{ $lead['title'] }}
                </h3>
                <p class="mt-3 font-serif text-xl leading-[1.5] text-ink/80">{{ $lead['excerpt'] }}</p>
                <p class="mt-auto pt-4 text-sm text-subtle">By {{ $lead['author'] }} · {{ $lead['readTime'] }}</p>
            </a>
        </x-reveal>

        <ul class="-mt-4 divide-y divide-line lg:col-span-5">
            @foreach ($rest as $i => $story)
                <x-reveal as="li" :delay="$i * 80">
                    <a href="#" class="group flex gap-4 py-4">
                        <div class="aspect-[4/3] w-32 shrink-0 overflow-hidden rounded-md bg-paper">
                            <x-img :src="$story['image']" sizes="128px" class="card-img" />
                        </div>
                        <div>
                            <p class="eyebrow text-subtle">{{ $story['category'] }}</p>
                            <h3 class="mt-1 font-serif text-[22px] leading-[1.2] font-medium group-hover:underline group-hover:decoration-1 group-hover:underline-offset-4">
                                {{ $story['title'] }}
                            </h3>
                            <p class="mt-1.5 text-xs text-muted">{{ $story['author'] }} · {{ $story['readTime'] }}</p>
                        </div>
                    </a>
                </x-reveal>
            @endforeach
        </ul>
    </div>
</section>
