<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Tests\TestCase;

class NewsletterSignupTest extends TestCase
{
    public function test_a_valid_email_subscribes(): void
    {
        Livewire::test('newsletter-signup')
            ->set('email', 'reader@example.com')
            ->call('subscribe')
            ->assertHasNoErrors()
            ->assertSet('subscribed', true)
            ->assertSet('email', '')
            ->assertSee('Thanks for subscribing');
    }

    public function test_email_is_required_and_must_be_valid(): void
    {
        Livewire::test('newsletter-signup')
            ->call('subscribe')
            ->assertHasErrors(['email' => 'required'])
            ->set('email', 'not-an-email')
            ->call('subscribe')
            ->assertHasErrors(['email' => 'email'])
            ->assertSet('subscribed', false);
    }
}
