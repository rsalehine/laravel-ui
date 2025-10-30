<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.checkbox.demo" />

    <x-md.h2>Installation</x-md.h2>
    <livewire:terminal code="flexi-cli add checkbox" />


</x-layouts.doc-page-wrapper>
