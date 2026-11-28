@props(['title' => null, 'lcpImage' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex, nofollow">

        <title>{{ $title ?? 'Travel Magine — Stories, Guides & Inspiration for Curious Travellers' }}</title>
        <meta name="description" content="Travel stories, destination guides, hotel reviews and expert tips from the editors of Travel Magine.">

        {{-- Preload the cover story photo: it is the Largest Contentful Paint element. --}}
        @if ($lcpImage)
            @php($lcp = \App\Support\ResponsiveImage::for($lcpImage))
            <link
                rel="preload"
                as="image"
                href="{{ $lcp['src'] }}"
                imagesrcset="{{ $lcp['srcset'] }}"
                imagesizes="(min-width: 1200px) 780px, (min-width: 1024px) 66vw, 100vw"
                fetchpriority="high"
            >
        @endif

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="flex min-h-full flex-col">
        {{ $slot }}

        {{-- Livewire 4 bundles Alpine.js (with the intersect plugin) — no separate install. --}}
        @livewireScripts
    </body>
</html>
