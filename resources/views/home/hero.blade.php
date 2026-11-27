@php($lead = $heroStories[0])
@php($others = array_slice($heroStories, 1))

{{-- Cover story: one large lead with photo, plus a short list of other featured stories. --}}
<section class="mx-auto max-w-[1200px] px-4 pt-8 pb-10 sm:px-6 sm:pt-10 sm:pb-15">
    <div class="grid gap-8 lg:grid-cols-12 lg:gap-10">
        <article class="lg:col-span-8">
            <a href="#" class="group block">
                <div class="aspect-[3/2] overflow-hidden rounded-lg bg-paper">
                    {{-- The lead photo is the LCP element: eager, high priority and preloaded in the layout. --}}
                    <x-img
                        :src="$lead['image']"
                        :alt="$lead['location']"
                        sizes="(min-width: 1200px) 780px, (min-width: 1024px) 66vw, 100vw"
                        loading="eager"
                        fetchpriority="high"
                        class="card-img"
                    />
                </div>
                <p class="eyebrow mt-5 text-success">Cover story · {{ $lead['category'] }}</p>
                <h1 class="mt-2 font-serif text-[34px] leading-[1.1] font-medium group-hover:underline group-hover:decoration-1 group-hover:underline-offset-4 sm:text-[44px]">
                    {{ $lead['title'] }}
                </h1>
                <p class="mt-3 text-sm text-subtle">By {{ $lead['author'] }} · {{ $lead['readTime'] }}</p>
            </a>
        </article>

        <aside class="lg:col-span-4 lg:border-l lg:border-line lg:pl-10">
            <p class="eyebrow text-ink">Also in this issue</p>
            <p class="mt-1 text-sm text-subtle">Issue 27 · Winter 2026</p>

            <ul class="mt-5 divide-y divide-line border-t border-line">
                @foreach ($others as $story)
                    <li>
                        <a href="#" class="group flex gap-4 py-5">
                            <div class="h-20 w-24 shrink-0 overflow-hidden rounded-md bg-paper">
                                <x-img :src="$story['image']" sizes="96px" class="card-img" />
                            </div>
                            <div>
                                <p class="eyebrow text-subtle">{{ $story['category'] }} · {{ $story['location'] }}</p>
                                <h2 class="mt-1 font-serif text-xl leading-[1.2] font-medium group-hover:underline group-hover:decoration-1 group-hover:underline-offset-4">
                                    {{ $story['title'] }}
                                </h2>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>

            <p class="mt-6 font-serif text-xl leading-[1.5] text-ink/80">
                Award-winning travel journalism, honest guides and big ideas for your next trip.
            </p>
            <a href="#" class="btn mt-5">Read the issue</a>
        </aside>
    </div>
</section>
