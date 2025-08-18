@php

@endphp

<x-layouts.doc-page-wrapper :current="$current" :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug" :links="[]">
    <x-md.h2>Colors</x-md.h2>
    <x-md.paragraph>
        We’ve opted for semantic naming approche, so we have color’s name as <x-docs.inline-code text="primary" />,
        <x-docs.inline-code text="secondary" />, etc…
    </x-md.paragraph>

    <livewire:load-code :name="['theme-both', 'theme-light', 'theme-dark']" />

</x-layouts.doc-page-wrapper>
