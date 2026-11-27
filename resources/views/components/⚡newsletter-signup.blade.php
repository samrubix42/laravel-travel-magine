<?php

use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component
{
    #[Validate('required|email:rfc|max:255')]
    public string $email = '';

    public bool $subscribed = false;

    public function subscribe(): void
    {
        $this->validate();

        // TODO: connect to the client's email provider (Mailchimp, ConvertKit, etc.).

        $this->reset('email');
        $this->subscribed = true;
    }
};
?>

<div>
    @if ($subscribed)
        <div class="rounded-lg border border-line p-6">
            <p class="eyebrow text-success">You're in</p>
            <p class="mt-2 font-serif text-xl">Thanks for subscribing. Your first postcard arrives this Sunday.</p>
        </div>
    @else
        <form wire:submit="subscribe">
            <label for="newsletter-email" class="text-sm font-medium">Email address</label>
            <div class="mt-2 flex flex-col gap-3 sm:flex-row">
                <input
                    id="newsletter-email"
                    type="email"
                    wire:model="email"
                    placeholder="you@example.com"
                    autocomplete="email"
                    @class([
                        'h-[47px] flex-1 rounded border bg-surface px-3 text-base outline-none transition focus:border-ink',
                        'border-error' => $errors->has('email'),
                        'border-line' => ! $errors->has('email'),
                    ])
                >
                <button
                    type="submit"
                    class="btn justify-center disabled:opacity-60"
                    wire:loading.attr="disabled"
                >
                    <span wire:loading.remove wire:target="subscribe">Sign up</span>
                    <span wire:loading wire:target="subscribe">Signing up…</span>
                </button>
            </div>
            @error('email')
                <p class="mt-2 text-sm text-error">{{ $message }}</p>
            @else
                <p class="mt-3 text-xs text-muted">One email a week. Unsubscribe any time.</p>
            @enderror
        </form>
    @endif
</div>
