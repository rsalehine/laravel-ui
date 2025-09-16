<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.table.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-md.paragraph>Add the component</x-md.paragraph>

    <x-docs.tabs-installation>
        <x-slot:cli>
            <livewire:terminal code="flexi-cli add table" />
        </x-slot:cli>
        <livewire:component-source :data="[
            'resources/views/components/ui/table.blade.php',
            'resources/views/components/ui/table/columns.blade.php',
            'resources/views/components/ui/table/column.blade.php',
            'resources/views/components/ui/table/rows.blade.php',
            'resources/views/components/ui/table/row.blade.php',
            'resources/views/components/ui/table/cell.blade.php',
        ]" />
    </x-docs.tabs-installation>

    <x-md.h2>Examples</x-md.h2>
    <x-md.h3>Stripped</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.table.stripped" />

    <x-md.h3>Hoverable</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.table.hoverable" />

    <x-md.h3>Stripped Hoverable</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.table.hoverable-stripped" />

    <x-md.h3>Custom Example 1</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.table.custom-1" />
</x-layouts.doc-page-wrapper>
