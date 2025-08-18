<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.kbd.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code text="kbd.blade.php" /> file insise
            your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="['resources/views/components/ui/kbd.blade.php']" />
    </x-docs.tabs-installation>

    <x-md.h2>With Icon / Symbol</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.kbd.icon" />

    <x-md.h2>Grouped</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.kbd.grouped" />
</x-layouts.doc-page-wrapper>
