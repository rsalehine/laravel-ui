<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.card.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-md.paragraph>Add the component</x-md.paragraph>

    <x-docs.tabs-installation>
        <x-slot:cli>
            <livewire:terminal code="flexi-cli add card" />
        </x-slot:cli>
        <livewire:component-source :data="[
            'resources/views/components/ui/card.blade.php',
            'resources/views/components/ui/card/header.blade.php',
            'resources/views/components/ui/card/content.blade.php',
            'resources/views/components/ui/card/footer.blade.php',
            'resources/views/components/ui/card/title.blade.php',
            'resources/views/components/ui/card/description.blade.php',
        ]" />
    </x-docs.tabs-installation>

    <x-md.h2>Examples</x-md.h2>
    <x-md.h3>With Icon</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.card.with-icon" />

    <x-md.h3>E-Commerce 1</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.card.e-commerce-1" />

    <x-md.h3>E-Commerce 2</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.card.e-commerce-2" />

    <x-md.h3>Pricing</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.card.pricing-1" />
</x-layouts.doc-page-wrapper>
