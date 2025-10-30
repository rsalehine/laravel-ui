<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.avatar.demo" />

    <x-md.h2>Installation</x-md.h2>
    <livewire:terminal code="flexi-cli add avatar avatar-placeholder" />

    <x-md.h2>Placeholder Text</x-md.h2>
    <x-md.h3>With text</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.avatar.placeholder" />
    <x-md.h3>With Icon</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.avatar.placeholder-with-icon" />
</x-layouts.doc-page-wrapper>
