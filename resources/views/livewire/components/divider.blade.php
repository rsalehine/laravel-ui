<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.divider.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-slot:cli>
            <livewire:terminal code="flexi-cli add divider" />
        </x-slot:cli>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code text="divider.blade.php" /> file insise
            your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="['resources/views/components/ui/divider.blade.php']" />
    </x-docs.tabs-installation>

    <x-md.h2>With label</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.divider.with-label" />

    <x-md.h2>Grouped</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.kbd.grouped" />



</x-layouts.doc-page-wrapper>
