<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.button.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code text="button.blade.php" /> file insise
            your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="['resources/views/components/ui/button.blade.php']" />
    </x-docs.tabs-installation>

    <x-md.h2>Sizes</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.button.sizes" />
    <x-md.h2>Icons</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.button.icons" />
    <x-md.h2>Examples</x-md.h2>
    <x-md.h3>With icon</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.button.with-icon" />

    <x-md.h3>Variants</x-md.h3>
    <x-docs.preview-ui>
        <x-examples.button.variants />
    </x-docs.preview-ui>
</x-layouts.doc-page-wrapper>
