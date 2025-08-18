@php

    $items = [
        [
            'text' => 'Docs',
            'href' => '/docs/introduction',
        ],
        [
            'text' => 'Components',
            'href' => '/components/accordion',
        ],
        [
            'text' => 'Blocks',
            'href' => '/blocks/hero-sections',
        ],
        [
            'text' => 'Tools',
            'href' => '/tools',
        ],
    ];

@endphp

<ul class="flex flex-col lg:flex-row lg:items-center gap-4 text-fg-muted">
    @foreach ($items as $item)
        <li class="relative group">
             <x-atoms.ui-link href="{{ $item['href'] }}" class="flex items-center text-sm">
                    {{ $item['text'] }}
                </x-atoms.ui-link>
        </li>
    @endforeach
</ul>
