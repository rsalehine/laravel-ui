<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.alert.default" />

    <x-md.h2>Installation</x-md.h2>
    <livewire:terminal code="flexi-cli add alert" />


    <x-md.h2>Examples</x-md.h2>

    <x-md.h3>With Title</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.alert.with-title" />

    <x-md.h3>Variants</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.alert.variants" />

</x-layouts.doc-page-wrapper>
