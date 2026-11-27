<?php

use App\Support\HomeContent;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    public string $active = 'All';

    /**
     * Switch the visible category. Unknown values fall back to "All".
     */
    public function setActive(string $category): void
    {
        $this->active = in_array($category, HomeContent::CATEGORIES, true) ? $category : 'All';
    }

    /**
     * @return list<array<string, string>>
     */
    #[Computed]
    public function items(): array
    {
        return HomeContent::inspiration($this->active);
    }
};
?>

<div>
    <div class="no-scrollbar -mx-4 mb-8 flex gap-2 overflow-x-auto px-4" role="tablist">
        @foreach (HomeContent::CATEGORIES as $category)
            <button
                type="button"
                wire:key="tab-{{ $category }}"
                wire:click="setActive(@js($category))"
                role="tab"
                aria-selected="{{ $active === $category ? 'true' : 'false' }}"
                @class([
                    'shrink-0 rounded-full border px-3.5 py-1.5 text-[13px] font-medium transition-colors',
                    'border-ink bg-ink text-white' => $active === $category,
                    'border-line text-ink hover:border-ink' => $active !== $category,
                ])
            >
                {{ $category }}
            </button>
        @endforeach
    </div>

    <div
        wire:loading.class="opacity-60"
        wire:target="setActive"
        class="grid gap-5 transition-opacity sm:grid-cols-2 lg:grid-cols-4"
    >
        @foreach ($this->items as $story)
            <a href="#" wire:key="story-{{ $story['slug'] }}" class="card group">
                <div class="aspect-[3/2] overflow-hidden rounded-md bg-paper">
                    <x-img :src="$story['image']" sizes="(min-width: 1024px) 270px, (min-width: 640px) 50vw, 100vw" class="card-img" />
                </div>
                <p class="eyebrow mt-4 text-subtle">{{ $story['category'] }}</p>
                <h3 class="mt-1.5 font-serif text-[22px] leading-[1.2] font-medium group-hover:underline group-hover:decoration-1 group-hover:underline-offset-4">
                    {{ $story['title'] }}
                </h3>
                <p class="mt-auto pt-4 text-xs text-muted">{{ $story['author'] }} · {{ $story['readTime'] }}</p>
            </a>
        @endforeach
    </div>
</div>
