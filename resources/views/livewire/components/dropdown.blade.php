<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">

    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.dropdown.demo" />


    <x-md.h2>Installation</x-md.h2>
    <x-md.paragraph>Add the component</x-md.paragraph>

    <x-docs.steps>
        <x-docs.step>
            <x-md.h3>Add the component</x-md.h3>
            <livewire:terminal code="flexi-cli add dropdown" />
        </x-docs.step>
        <x-docs.step>
            <x-md.h3>Install Dropdown</x-md.h3>
            <x-docs.callout intent="gray" type="note">
                This component require JS. By default we're using our own Interactive Component Library
                <x-docs.link href="https://flexilla-docs.vercel.app/">Flexilla</x-docs.link>. Install this only if you
                didn't accept dependencies installation during component addition.
            </x-docs.callout>
            <x-md.ol>
                <x-md.li><strong>With Alpine</strong></x-md.li>
                <livewire:terminal :code="'npm i @flexilla/alpine-dropdown'" />
                <x-md.paragraph>Add plugin in <x-docs.inline-code text="flexilla.js" /></x-md.paragraph>

                <livewire:load-code :name="['add-dropdown-plugin-in-app']" />
                <x-md.li><strong>Without Alpine</strong></x-md.li>
                <x-docs.callout intent="gray" type="note">
                    Make sure that the dropdown package is not installed
                </x-docs.callout>
                <livewire:terminal :code="'npm i @flexilla/dropdown'" />
                <x-md.paragraph>Initialize dropdown in <x-docs.inline-code text="flexilla.js" /></x-md.paragraph>
                <livewire:load-code :name="['add-dropdown-in-app']" />
            </x-md.ol>
        </x-docs.step>
    </x-docs.steps>


    <x-md.h2>Examples</x-md.h2>
    <x-md.h3>With icons</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.dropdown.with-icon" />

    <x-md.h3>With header</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.dropdown.with-header" />

    <x-md.h3>Submenu</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.dropdown.sub-menu" />

</x-layouts.doc-page-wrapper>
