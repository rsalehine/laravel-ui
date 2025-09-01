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

<ul class="w-full flex flex-col lg:flex-row lg:items-center gap-4 text-fg-muted bg-bg lg:bg-transparent rounded-global p-2 lg:p-0 border border-border dark:border-border-strong lg:border-none">
    @foreach ($items as $item)
        <li class="relative group">
             <x-atoms.ui-link href="{{ $item['href'] }}" class="flex items-center text-sm hover:text-white ease-linear duration-200">
                    {{ $item['text'] }}
                </x-atoms.ui-link>
        </li>
    @endforeach
</ul>
