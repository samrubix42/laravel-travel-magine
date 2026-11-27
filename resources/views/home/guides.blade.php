<section class="mx-auto max-w-[1200px] px-4 py-10 sm:px-6 sm:py-15">
    <x-section-heading kicker="Plan smarter" title="Essential travel guides" cta="All guides" />

    <div class="grid gap-7.5 md:grid-cols-3">
        @foreach ($guides as $i => $guide)
            <x-reveal :delay="$i * 80">
                <a href="#" class="card group">
                    <div class="aspect-[3/2] overflow-hidden rounded-md bg-paper">
                        <x-img :src="$guide['image']" sizes="(min-width: 768px) 360px, 100vw" class="card-img" />
                    </div>
                    <p class="eyebrow mt-4 text-subtle">{{ $guide['meta'] }}</p>
                    <h3 class="mt-2 font-serif text-2xl leading-[1.2] font-medium group-hover:underline group-hover:decoration-1 group-hover:underline-offset-4">
                        {{ $guide['title'] }}
                    </h3>
                    <span class="mt-auto pt-5 text-sm text-accent">Read guide →</span>
                </a>
            </x-reveal>
        @endforeach
    </div>
</section>
