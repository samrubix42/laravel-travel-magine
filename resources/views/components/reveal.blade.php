@props(['delay' => 0, 'as' => 'div'])

{{-- Fades + slides its content in the first time it scrolls into view (Alpine x-intersect, bundled with Livewire). --}}
<{{ $as }}
    x-data
    x-intersect.once.margin.-40px="$el.classList.add('is-visible')"
    {{ $attributes->merge(['class' => 'reveal']) }}
    style="--delay: {{ (int) $delay }}ms"
>
    {{ $slot }}
</{{ $as }}>
