<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.breadcrumb.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-md.paragraph>Add the component</x-md.paragraph>

    <x-docs.tabs-installation>
        <livewire:component-source :data="[
            'resources/views/components/ui/breadcrumb.blade.php',
            'resources/views/components/ui/breadcrumb/item.blade.php',
            'resources/views/components/ui/breadcrumb/separator.blade.php',
        ]" />
    </x-docs.tabs-installation>

    <x-md.h2>Examples</x-md.h2>
    <x-md.h3>With Icon</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.breadcrumb.with-icon" />

    <x-md.h3>Outline wrapper</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.breadcrumb.outline" />

    <x-md.h3>Custom indicator</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.breadcrumb.custom-indicator" />

</x-layouts.doc-page-wrapper>
