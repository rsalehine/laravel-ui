<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">

    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.tabs.demo" />


    <x-md.h2>Installation</x-md.h2>
    <x-md.paragraph>Add the component</x-md.paragraph>

    <x-docs.tabs-installation>
        <x-docs.steps>
            <x-docs.step>
                <x-md.h3>Create needed files</x-md.h3>
                <livewire:component-source :data="[
                    'resources/views/components/ui/tabs.blade.php',
                    'resources/views/components/ui/tabs/list-wrapper.blade.php',
                    'resources/views/components/ui/tabs/list.blade.php',
                    'resources/views/components/ui/tabs/trigger.blade.php',
                    'resources/views/components/ui/tabs/panel-wrapper.blade.php',
                    'resources/views/components/ui/tabs/panel.blade.php',
                ]" />
            </x-docs.step>
            <x-docs.step>
                <x-md.h3>Install Tabs</x-md.h3>
                <x-docs.callout type="note">
                    This component require JS. By default we're using our own Interactive Component Library
                    <x-docs.link href="https://flexilla-docs.vercel.app/">Flexilla</x-docs.link>. You can install the
                    Alpine Plugin if using Alpine or the vanilla JS version as you need
                </x-docs.callout>
                <x-md.ol>
                    <x-md.li><strong>With Alpine</strong></x-md.li>
                    <livewire:terminal :code="'npm i @flexilla/alpine-tabs'" />
                    <x-md.paragraph>Add plugin in <x-docs.inline-code text="app.js" /></x-md.paragraph>

                    <livewire:load-code :name="['add-tabs-plugin-in-app']" />
                    <x-md.li><strong>Without Alpine</strong></x-md.li>
                    <livewire:terminal :code="'npm i @flexilla/tabs'" />
                    <x-md.paragraph>Initialize modal in <x-docs.inline-code text="app.js" /></x-md.paragraph>

                    <livewire:load-code :name="['add-tabs-in-app']" />

                </x-md.ol>
            </x-docs.step>
        </x-docs.steps>
    </x-docs.tabs-installation>

    <x-md.h2>Examples</x-md.h2>
    <x-md.h3>Form</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.tabs.form" />




</x-layouts.doc-page-wrapper>
