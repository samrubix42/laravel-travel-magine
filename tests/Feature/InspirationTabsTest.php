<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Tests\TestCase;

class InspirationTabsTest extends TestCase
{
    public function test_it_shows_every_story_by_default(): void
    {
        Livewire::test('inspiration-tabs')
            ->assertSet('active', 'All')
            ->assertSee('The Street Food Stalls That Define Bangkok')
            ->assertSee('Seeing the Taj Mahal Without the Crowds');
    }

    public function test_it_filters_stories_by_category(): void
    {
        Livewire::test('inspiration-tabs')
            ->call('setActive', 'Hotels')
            ->assertSet('active', 'Hotels')
            ->assertSee('12 Hotel Pools You')
            ->assertDontSee('The Street Food Stalls That Define Bangkok');
    }

    public function test_unknown_categories_fall_back_to_all(): void
    {
        Livewire::test('inspiration-tabs')
            ->call('setActive', 'Not a category')
            ->assertSet('active', 'All');
    }
}
