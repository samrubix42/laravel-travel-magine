@php($columns = [
    'Explore' => ['Destinations', 'Inspiration', 'Food & Drink', 'Hotels'],
    'Plan' => ['Travel guides', 'Itineraries', 'Travel tips', 'Deals'],
    'Company' => ['About us', 'Contributors', 'Advertise', 'Contact'],
    'Magazine' => ['Print edition', 'Back issues', 'Gift a subscription', 'Podcast'],
])

<footer class="border-t border-ink bg-surface">
    <div class="mx-auto grid max-w-[1200px] gap-10 px-4 py-12 sm:px-6 md:grid-cols-12">
        <div class="md:col-span-4">
            <a href="{{ route('home') }}" class="flex items-baseline gap-1.5 leading-none">
                <span class="font-display text-3xl uppercase">Travel</span>
                <span class="font-serif text-[32px] font-medium">Magine</span>
            </a>
            <p class="mt-4 max-w-xs text-sm leading-[1.6] text-subtle">Stories, guides and inspiration for curious travellers. Go further, see deeper.</p>
            <div class="mt-5 flex gap-4 text-sm">
                @foreach (['Instagram', 'X', 'YouTube', 'Facebook'] as $social)
                    <a href="#" class="text-subtle hover:text-ink">{{ $social }}</a>
                @endforeach
            </div>
        </div>

        @foreach ($columns as $heading => $links)
            <div class="md:col-span-2">
                <p class="eyebrow">{{ $heading }}</p>
                <ul class="mt-4 space-y-2.5 text-sm text-subtle">
                    @foreach ($links as $link)
                        <li><a href="#" class="hover:text-ink">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    <div class="border-t border-line">
        <div class="mx-auto flex max-w-[1200px] flex-col justify-between gap-3 px-4 py-5 text-xs text-muted sm:flex-row sm:px-6">
            <p>© {{ now()->year }} Travel Magine. All rights reserved.</p>
            <div class="flex gap-5">
                <a href="#" class="hover:text-ink">Privacy</a>
                <a href="#" class="hover:text-ink">Terms</a>
                <a href="#" class="hover:text-ink">Cookies</a>
            </div>
        </div>
    </div>
</footer>
