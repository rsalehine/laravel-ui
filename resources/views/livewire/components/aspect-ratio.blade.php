<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.aspect.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code text="aspect.blade.php" /> file insise
            your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="['resources/views/components/ui/aspect.blade.php']" />
    </x-docs.tabs-installation>

    <x-md.h2>Examples</x-md.h2>

    <x-md.h3>Square</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.aspect.square" />

    <x-md.h3>Video</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.aspect.demo" />

    <x-md.h3>Standard TV</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.aspect.standard-tv" />

    <x-md.h3>35mm film</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.aspect.mm-film" />

    <x-md.h3>Ultra wide</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.aspect.ultra-wide" />

</x-layouts.doc-page-wrapper>
