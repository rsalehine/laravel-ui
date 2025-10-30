<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">

    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.accordion.default" />


    <x-md.h2>Installation</x-md.h2>
    <x-md.paragraph>Add the component</x-md.paragraph>

    <x-docs.steps>
        <x-docs.step>
            <x-md.h3>Add the component</x-md.h3>
            <livewire:terminal code="flexi-cli add accordion" />
        </x-docs.step>
        <x-docs.step>
            <x-md.h3>Add the </x-md.h3>
            <x-docs.callout type="note">
                This component require JS. By default we're using our own Interactive Component Library
                <x-docs.link href="https://flexilla-docs.vercel.app/">Flexilla</x-docs.link>.
            </x-docs.callout>
            <x-md.ol>
                <x-md.li><strong>With Alpine</strong></x-md.li>
                <x-md.paragraph>
                    If you've installed the plugin during component addition then you don't need to install it here.
                </x-md.paragraph>
                <livewire:terminal :code="'npm i @flexilla/alpine-accordion'" />
                <x-md.paragraph>Add plugin in <x-docs.inline-code text="app.js" /></x-md.paragraph>

                <livewire:load-code :name="['add-accordion-plugin-in-app']" />
                <x-md.li><strong>Without Alpine</strong></x-md.li>
                <x-md.paragraph>
                 By default when adding the component with the CLI it will ask if you want to install dependdencies, and here it comes with the Alpine Plugin, if you've accepted installing it you need to uninstall the plugin and then Install the Vanilla Version
                </x-md.paragraph>
                <livewire:terminal :code="'npm i @flexilla/accordion'" />
                <x-md.paragraph>Initialize accordion in <x-docs.inline-code text="app.js" /></x-md.paragraph>

                <livewire:load-code :name="['add-accordion-in-app']" />

            </x-md.ol>
        </x-docs.step>
    </x-docs.steps>


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
