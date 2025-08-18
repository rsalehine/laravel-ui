<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.badge.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code text="badge.blade.php" /> file insise
            your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="['resources/views/components/ui/badge.blade.php']" />
    </x-docs.tabs-installation>

    <x-md.h2>Variants</x-md.h2>
    <x-md.h3>Solid</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.badge.solid" />
    <x-md.h3>Outline</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.badge.outline" />
    <x-md.h3>Soft</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.badge.soft" />
    <x-md.h3>Subtle</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.badge.subtle" />

     <x-md.h2>With icon</x-md.h2>
     <livewire:component-tab-preview-code no-in-tabs component="components.examples.badge.with-icon" />
</x-layouts.doc-page-wrapper>
