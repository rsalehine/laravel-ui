<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">

    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.slideover.demo" />


    <x-md.h2>Installation</x-md.h2>
    <x-md.paragraph>Add the component</x-md.paragraph>

    <x-docs.tabs-installation>
        <x-slot:cli>
            <livewire:terminal code="flexi-cli add slideover" />
        </x-slot:cli>
        <x-docs.steps>
            <x-docs.step>
                <x-md.h3>Create needed files</x-md.h3>
                <livewire:component-source :data="[
                    'resources/views/components/ui/slideover.blade.php',
                    'resources/views/components/ui/slideover/content.blade.php',
                    'resources/views/components/ui/slideover/trigger.blade.php',
                    'resources/views/components/ui/slideover/close.blade.php',
                    'resources/views/components/ui/slideover/header.blade.php',
                    'resources/views/components/ui/slideover/body.blade.php',
                    'resources/views/components/ui/slideover/footer.blade.php',
                    'resources/views/components/ui/slideover/title.blade.php',
                    'resources/views/components/ui/slideover/description.blade.php',
                ]" />
            </x-docs.step>
            <x-docs.step>
                <x-md.h3>Install Accordion</x-md.h3>
                <x-docs.callout intent="gray" type="note">
                    This component require JS. By default we're using our own Interactive Component Library
                    <x-docs.link href="https://flexilla-docs.vercel.app/">Flexilla</x-docs.link>. You can install the
                    Alpine Plugin if using Alpine or the vanilla JS version as you need
                </x-docs.callout>
                <x-md.ol>
                    <x-md.li><strong>With Alpine</strong></x-md.li>
                    <livewire:terminal :code="'npm i @flexilla/alpine-modal'" />
                    <x-md.paragraph>Add plugin in <x-docs.inline-code text="flexilla.js"/></x-md.paragraph>

                    <livewire:load-code :name="['add-modal-plugin-in-app']" />
                    <x-md.li><strong>Without Alpine</strong></x-md.li>
                    <livewire:terminal :code="'npm i @flexilla/modal'" />
                    <x-md.paragraph>Initialize modal in <x-docs.inline-code text="flexilla.js"/></x-md.paragraph>

                    <livewire:load-code :name="['add-modal-in-app']" />

                </x-md.ol>
            </x-docs.step>
        </x-docs.steps>
    </x-docs.tabs-installation>


</x-layouts.doc-page-wrapper>
