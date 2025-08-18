@php
    $links = [
        [
            'href' => '/docs/installation',
            'title' => 'Installation',
            'description' => 'Step-by-step guide to install and setup Flexiwind',
            'icon' => 'ph--compass',
        ],
        [
            'href' => '/components',
            'title' => 'Components',
            'description' => 'Browse our pre-built components library',
            'icon' => 'ph--cube',
        ],
    ];
@endphp
<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug" :links="[]">
    <x-md.h2>Overview</x-md.h2>
    <x-md.paragraph>
        Flexiwind is a collection of blocks and components designed to work seamlessly with TailwindCSS. Designed to be
        attractive, functional, lightweight, flexible, and easy to use.
    </x-md.paragraph>

    <x-md.h2>Quick start</x-md.h2>

    <x-docs.links-grid :links="$links" />


    <x-md.h2>Authors</x-md.h2>
        <x-md.ul>
        <x-md.li><x-docs.doc-link href="https://">Johnkat MJ</x-docs.doc-link> </x-md.li>
        <x-md.li><x-docs.doc-link href="https://">Tresor Kasenda</x-docs.doc-link></x-md.li>
    </x-md.ul>

    <x-md.h2>Credits</x-md.h2>

</x-layouts.doc-page-wrapper>
