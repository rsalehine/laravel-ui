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
        <strong>
            Re-usable Laravel UI components built with Tailwind v4.
        </strong>
    </x-md.paragraph>
    <x-md.paragraph>
        <strong>Flexiwind Laravel</strong> brings the proven design system philosophy
        of open-source UI (like shadcn ui) components into the Laravel
        ecosystem—empowering developers with full <strong>code ownership</strong>, <strong>transparency</strong>, and
        <strong>flexibility</strong>.
    </x-md.paragraph>

    <x-md.paragraph>
        This is what Flexiwind Laravel aims to solve. It is built around the following principles:
    </x-md.paragraph>
    <x-md.ul>
        <x-md.li>
            <strong>Code Ownership</strong> : Every component is yours to customize. There’s no abstraction layer or hidden implementation—just clean, Tailwind-powered Blade components that you can modify freely to suit your application.
        </x-md.li>
        <x-md.li>
            <strong>Transparency</strong> : All code is open and visible. You’ll know exactly how each component works, making debugging, education, and adaptation straightforward.
        </x-md.li>
        <x-md.li>
            <strong>Laravel-Focused</strong> : Built specifically for Laravel (Blade, Tailwind, and related tooling), Flexiwind Laravel integrates seamlessly into your Laravel workflow—no abstractions, just Laravel-native flexibility.
        </x-md.li>
    </x-md.ul>

    <x-md.h2>Quick start</x-md.h2>

    <x-docs.links-grid :links="$links" />


    <x-md.h2>Authors</x-md.h2>
    <x-md.ul>
        <x-md.li><x-docs.doc-link href="https://">Johnkat MJ</x-docs.doc-link> </x-md.li>
        <x-md.li><x-docs.doc-link href="https://">Tresor Kasenda</x-docs.doc-link></x-md.li>
    </x-md.ul>

    <x-md.h2>Credits</x-md.h2>
    <x-md.ul>
        <x-md.li><x-docs.doc-link href="https://">shadcn ui</x-docs.doc-link> </x-md.li>
        <x-md.li><x-docs.doc-link href="https://">Tailus UI</x-docs.doc-link></x-md.li>
    </x-md.ul>

</x-layouts.doc-page-wrapper>
