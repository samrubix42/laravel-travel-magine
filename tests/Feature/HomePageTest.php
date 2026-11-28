<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_page_renders_every_section(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk()
            ->assertSeeInOrder([
                'Also in this issue',
                'Trending now',
                'Latest stories',
                'Where to',
                'Places to go',
                'Ideas for your next trip',
                'Essential travel guides',
                'The Sunday',
            ])
            ->assertSeeLivewire('inspiration-tabs')
            ->assertSeeLivewire('newsletter-signup');
    }

    public function test_pages_tell_search_engines_not_to_index(): void
    {
        $this->get(route('home'))
            ->assertSee('<meta name="robots" content="noindex, nofollow">', false);
    }

    public function test_first_hero_image_is_preloaded_and_not_lazy(): void
    {
        $response = $this->get(route('home'));

        $response->assertSee('as="image"', false)
            ->assertSee('fetchpriority="high"', false)
            ->assertSee('imagesrcset=', false)
            ->assertSee('hero-italy-coast-960.webp', false)
            ->assertSee('loading="eager"', false);
    }
}
