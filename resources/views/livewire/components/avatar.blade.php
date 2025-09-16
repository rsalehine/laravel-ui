<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.avatar.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-slot:cli>
            <livewire:terminal code="flexi-cli add avatar" />
        </x-slot:cli>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code text="avatar.blade.php" /> file insise
            your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="[
            'resources/views/components/ui/avatar.blade.php',
            'resources/views/components/ui/avatar-placeholder.blade.php',
        ]" />
    </x-docs.tabs-installation>

    <x-md.h2>Placeholder Text</x-md.h2>
    <x-md.h3>With text</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.avatar.placeholder" />
    <x-md.h3>With Icon</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.avatar.placeholder-with-icon" />
</x-layouts.doc-page-wrapper>
