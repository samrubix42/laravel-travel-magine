<?php

namespace App\Support;

/**
 * Placeholder editorial content for the home page.
 *
 * Swap these arrays for Eloquent models / a CMS later — every Blade partial
 * reads from here. Image paths are relative to /public.
 */
class HomeContent
{
    /** @var list<string> */
    public const CATEGORIES = ['All', 'Food & Drink', 'Hotels', 'Adventure', 'Culture'];

    /**
     * @return array<string, mixed>
     */
    public static function all(): array
    {
        return [
            'heroStories' => self::heroStories(),
            'trending' => self::trending(),
            'latest' => self::latest(),
            'destinations' => self::destinations(),
            'featureBanner' => self::featureBanner(),
            'guides' => self::guides(),
        ];
    }

    /**
     * @return list<array<string, string>>
     */
    public static function heroStories(): array
    {
        return [
            [
                'slug' => 'slow-summer-amalfi',
                'title' => "The Slow Summer: Rediscovering Italy's Coast by Ferry",
                'category' => 'Journeys',
                'author' => 'Elena Marsh',
                'readTime' => '12 min read',
                'image' => 'images/hero-italy-coast.jpg',
                'location' => 'Italy',
            ],
            [
                'slug' => 'himalaya-monastery-trail',
                'title' => 'Walking to the Edge of the Sky in the High Himalaya',
                'category' => 'Adventure',
                'author' => 'Rohan Mehta',
                'readTime' => '15 min read',
                'image' => 'images/hero-himalaya.jpg',
                'location' => 'Nepal',
            ],
            [
                'slug' => 'bali-beyond-beaches',
                'title' => 'Bali Beyond the Beaches: Rice Terraces, Rituals & Quiet Mornings',
                'category' => 'Culture',
                'author' => 'Maya Lestari',
                'readTime' => '9 min read',
                'image' => 'images/hero-bali.jpg',
                'location' => 'Indonesia',
            ],
        ];
    }

    /**
     * @return list<string>
     */
    public static function trending(): array
    {
        return [
            'Kyoto in Autumn',
            'Best Beaches of 2026',
            'Rajasthan Road Trip',
            'Iceland on a Budget',
            'New Hotel Openings',
            "Lisbon's Food Scene",
            'Northern Lights Guide',
            'Hidden Greek Islands',
        ];
    }

    /**
     * @return list<array<string, string>>
     */
    public static function latest(): array
    {
        return [
            [
                'slug' => 'jaipur-pink-city',
                'title' => '48 Hours in Jaipur: Palaces, Bazaars and the Perfect Lassi',
                'excerpt' => "A local's guide to the Pink City, from sunrise at Amber Fort to midnight street food in the old quarter.",
                'category' => 'City Guide',
                'author' => 'Ananya Rao',
                'readTime' => '8 min read',
                'image' => 'images/jaipur.jpg',
                'location' => 'India',
            ],
            ['slug' => 'tokyo-after-dark', 'title' => 'Tokyo After Dark: The Tiny Bars Worth Finding', 'category' => 'Nightlife', 'author' => 'Kenji Ito', 'readTime' => '6 min read', 'image' => 'images/tokyo.jpg'],
            ['slug' => 'santorini-off-season', 'title' => 'Why Santorini Is Better in November', 'category' => 'Islands', 'author' => 'Sofia Dimas', 'readTime' => '5 min read', 'image' => 'images/santorini.jpg'],
            ['slug' => 'halong-bay-junk', 'title' => 'Two Nights on a Junk Boat in Ha Long Bay', 'category' => 'Journeys', 'author' => 'Linh Tran', 'readTime' => '7 min read', 'image' => 'images/halong-bay.jpg'],
            ['slug' => 'swiss-lakes-rail', 'title' => "The Scenic Rail Route Through Switzerland's Lakes", 'category' => 'Rail Travel', 'author' => 'Jonas Keller', 'readTime' => '10 min read', 'image' => 'images/swiss-lakes.jpg'],
        ];
    }

    /**
     * @return list<array<string, string|int>>
     */
    public static function destinations(): array
    {
        return [
            ['name' => 'Paris', 'country' => 'France', 'stories' => 124, 'image' => 'images/dest-paris.jpg'],
            ['name' => 'Kyoto', 'country' => 'Japan', 'stories' => 86, 'image' => 'images/dest-kyoto.jpg'],
            ['name' => 'Agra', 'country' => 'India', 'stories' => 64, 'image' => 'images/dest-agra.jpg'],
            ['name' => 'New York', 'country' => 'USA', 'stories' => 152, 'image' => 'images/dest-new-york.jpg'],
            ['name' => 'London', 'country' => 'UK', 'stories' => 118, 'image' => 'images/dest-london.jpg'],
            ['name' => 'Maldives', 'country' => 'Indian Ocean', 'stories' => 41, 'image' => 'images/dest-maldives.jpg'],
        ];
    }

    /**
     * Inspiration stories, filtered by the Livewire tabs component.
     *
     * @return list<array<string, string>>
     */
    public static function inspiration(string $category = 'All'): array
    {
        $items = [
            ['slug' => 'street-food-bangkok', 'title' => 'The Street Food Stalls That Define Bangkok', 'category' => 'Food & Drink', 'author' => 'Ploy S.', 'readTime' => '6 min', 'image' => 'images/bangkok-street-food.jpg'],
            ['slug' => 'tasting-menu', 'title' => 'Is the Tasting Menu Worth a Whole Trip?', 'category' => 'Food & Drink', 'author' => 'Marco Bellini', 'readTime' => '5 min', 'image' => 'images/tasting-menu.jpg'],
            ['slug' => 'pool-hotels', 'title' => "12 Hotel Pools You'll Never Want to Leave", 'category' => 'Hotels', 'author' => 'Claire Dupont', 'readTime' => '7 min', 'image' => 'images/hotel-pool.jpg'],
            ['slug' => 'boutique-stays', 'title' => 'The Boutique Stays Redefining Luxury', 'category' => 'Hotels', 'author' => 'Aarav Shah', 'readTime' => '8 min', 'image' => 'images/boutique-hotel.jpg'],
            ['slug' => 'alpine-summits', 'title' => "First-Timer's Guide to Alpine Summits", 'category' => 'Adventure', 'author' => 'Nina Berg', 'readTime' => '11 min', 'image' => 'images/alpine-summit.jpg'],
            ['slug' => 'road-trips', 'title' => 'Seven Road Trips for the Wide-Open Road', 'category' => 'Adventure', 'author' => 'Sam Carter', 'readTime' => '9 min', 'image' => 'images/road-trip.jpg'],
            ['slug' => 'travel-with-locals', 'title' => 'How Travelling With Locals Changes Everything', 'category' => 'Culture', 'author' => 'Ines Duarte', 'readTime' => '6 min', 'image' => 'images/travel-with-locals.jpg'],
            ['slug' => 'taj-sunrise', 'title' => 'Seeing the Taj Mahal Without the Crowds', 'category' => 'Culture', 'author' => 'Priya Nair', 'readTime' => '5 min', 'image' => 'images/taj-mahal.jpg'],
        ];

        if ($category === 'All') {
            return $items;
        }

        return array_values(array_filter($items, fn (array $item): bool => $item['category'] === $category));
    }

    /**
     * @return list<array<string, string>>
     */
    public static function guides(): array
    {
        return [
            ['title' => 'The Ultimate Iceland Ring Road Guide', 'meta' => 'Itinerary · 14 days', 'image' => 'images/guide-iceland.jpg'],
            ['title' => 'Island-Hopping the Maldives on Any Budget', 'meta' => 'Planning · Beaches', 'image' => 'images/guide-maldives.jpg'],
            ['title' => 'Patagonia: When to Go & What to Pack', 'meta' => 'Essentials · Hiking', 'image' => 'images/guide-patagonia.jpg'],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public static function featureBanner(): array
    {
        return [
            'kicker' => 'The Big List · 2027 Edition',
            'count' => 50,
            'excerpt' => 'Our editors and correspondents on six continents pick the destinations, openings and experiences that will define the year ahead.',
            'image' => 'images/big-list-mountains.jpg',
            'picks' => [
                ['place' => 'Kerala Backwaters', 'country' => 'India'],
                ['place' => 'Lofoten Islands', 'country' => 'Norway'],
                ['place' => 'Oaxaca', 'country' => 'Mexico'],
            ],
        ];
    }
}
