@props([
    'activeGroup' => '',
    'activeItem' => '',
    'description' => null,
    'keywords' => null,
    'title' => '',
    'hideTableOfContent' => false,
    'ogImage' => ['src' => null, 'alt' => null],
])

@php
    $seo = [
        'ogImage' => [
            'src' => $ogImage['src'] ?? config('app.default_og_image', '/default-og.png'),
            'alt' => $ogImage['alt'] ?? config('app.default_og_alt', 'Default OG Alt'),
        ],
        'keywords' => trim(config('app.keywords_def', 'docs, flexiwind') . ($keywords ? ", $keywords" : '')),
        'title' => $title,
        'description' => $description ?? 'Easily add interactive Components to your App.',
    ];
@endphp

<x-layouts.base :seo="$seo">
    <x-organisms.navbar />
    <x-blocks.modal-search />
</x-layouts.base>
