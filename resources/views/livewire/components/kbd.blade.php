<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.kbd.demo" />

    <x-md.h2>Installation</x-md.h2>
    <livewire:terminal code="flexi-cli add kbd" />

    <x-md.h2>With Icon / Symbol</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.kbd.icon" />

    <x-md.h2>Grouped</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.kbd.grouped" />
</x-layouts.doc-page-wrapper>
