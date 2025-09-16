<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.range.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-slot:cli>
            <livewire:terminal code="flexi-cli add range" />
        </x-slot:cli>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code text="range.blade.php" /> file insise
            your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="['resources/views/components/ui/range.blade.php']" />
    </x-docs.tabs-installation>

    <x-md.h2>Stepper</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.range.stepper" />

    <x-md.h2>Styles</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.range.styles" />

    <x-md.h2>Custom indicator</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.range.custom-indicator" />

    <x-md.h2>Sizes</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.range.sizes" />


</x-layouts.doc-page-wrapper>
