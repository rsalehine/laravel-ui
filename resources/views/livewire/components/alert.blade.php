<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.alert.default" />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-slot:cli>
            <livewire:terminal code="flexi-cli add alert" />
        </x-slot:cli>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code
                text="alert.blade.php" /> file insise your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="['resources/views/components/ui/alert.blade.php']" />
    </x-docs.tabs-installation>


    <x-md.h2>Examples</x-md.h2>

    <x-md.h3>With Title</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.alert.with-title" />

    <x-md.h3>Variants</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.alert.variants" />

</x-layouts.doc-page-wrapper>
