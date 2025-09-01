<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.callout.demo" no-in-tabs />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-md.paragraph>
            First you need to copy the code from the source tab. Make sure that the <x-docs.inline-code
                text="alert.blade.php" /> file is in your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code text="callout.blade.php" /> file insise
            your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="[
            'resources/views/components/ui/callout.blade.php',
            'resources/views/components/ui/callout/title.blade.php',
            'resources/views/components/ui/callout/description.blade.php',
        ]" />
    </x-docs.tabs-installation>


    <x-md.h2>Examples</x-md.h2>


    <x-md.h3>Message</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.callout.message" no-in-tabs />


    <x-md.h3>With Title</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.callout.with-title" no-in-tabs />


</x-layouts.doc-page-wrapper>
