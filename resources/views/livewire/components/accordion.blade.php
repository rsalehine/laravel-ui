<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">

    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.accordion.default" />


    <x-md.h2>Installation</x-md.h2>
    <x-md.paragraph>Add the component</x-md.paragraph>

    <x-docs.tabs-installation>

        <x-docs.steps>
            <x-docs.step>
                <x-md.h3>Create needed files</x-md.h3>
                <livewire:component-source :data="[
                    'resources/views/components/ui/accordion.blade.php',
                    'resources/views/components/ui/accordion/item.blade.php',
                    'resources/views/components/ui/accordion/content.blade.php',
                    'resources/views/components/ui/accordion/trigger.blade.php',
                    'resources/views/components/ui/accordion/indicator.blade.php',
                ]" />
            </x-docs.step>
            <x-docs.step>
                <x-md.h3>Install Accordion</x-md.h3>
                <x-docs.callout type="note">
                    This component require JS. By default we're using our own Interactive Component Library
                    <x-docs.link href="https://flexilla-docs.vercel.app/">Flexilla</x-docs.link>. You can install the
                    Alpine Plugin if using Alpine or the vanilla JS version as you need
                </x-docs.callout>
                <x-md.ol>
                    <x-md.li><strong>With Alpine</strong></x-md.li>
                    <livewire:terminal :code="'npm i @flexilla/alpine-accordion'" />
                    <x-md.paragraph>Add plugin in <x-docs.inline-code text="app.js"/></x-md.paragraph>

                    <livewire:load-code :name="['add-accordion-plugin-in-app']" />
                    <x-md.li><strong>Without Alpine</strong></x-md.li>
                    <livewire:terminal :code="'npm i @flexilla/accordion'" />
                    <x-md.paragraph>Initialize accordion in <x-docs.inline-code text="app.js"/></x-md.paragraph>

                    <livewire:load-code :name="['add-accordion-in-app']" />

                </x-md.ol>
            </x-docs.step>
        </x-docs.steps>
    </x-docs.tabs-installation>

    
    <x-md.h2>Open multiple</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.accordion.multiple" />
    
    
    <x-md.h2>Variants</x-md.h2>

    <x-md.h3>Solid</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.accordion.solid" />

    <x-md.h3>Soft</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.accordion.soft" />

    <x-md.h3>Outline</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.accordion.outline" />

    <x-md.h3>Subtle</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.accordion.subtle" />

    <x-md.h3>Link</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.accordion.link" />









</x-layouts.doc-page-wrapper>
