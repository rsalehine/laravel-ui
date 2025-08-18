<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.progress.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code text="progress.blade.php" /> file insise
            your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="['resources/views/components/ui/progress.blade.php']" />
    </x-docs.tabs-installation>

    <x-md.h2>Indicator</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.progress.indicator" />

    <x-md.h2>Progressbar Size</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.progress.sizes" />

    <x-md.h2>Progress with Message</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.progress.message" />



</x-layouts.doc-page-wrapper>
