<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.text-area.demo" />

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code text="text-area.blade.php" /> file insise
            your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="['resources/views/components/ui/text-area.blade.php']" />
    </x-docs.tabs-installation>

    <x-md.h2>Resize none</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.text-area.no-resize" />

    <x-md.h2>Auto resize</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.text-area.auto-resize" />

            <x-docs.steps>
            <x-docs.step>
                <x-md.h3>Install Autoresize plugin</x-md.h3>
                <x-docs.callout intent="gray" type="note">
                    This component require JS. By default we're using our own Interactive Component Library
                    <x-docs.link href="https://flexilla-docs.vercel.app/">Flexilla</x-docs.link>. You can install the
                    Alpine Plugin if using Alpine or the vanilla JS version as you need
                </x-docs.callout>
                <x-md.ol>
                    <x-md.li><strong>With Alpine</strong></x-md.li>
                    <livewire:terminal :code="'npm i @flexilla/alpine-autoresize-area'" />
                    <x-md.paragraph>Add plugin in <x-docs.inline-code text="app.js" /></x-md.paragraph>

                    <livewire:load-code :name="['add-auto-resize-plugin-in-app']" />
                    <x-md.li><strong>Without Alpine</strong></x-md.li>
                    <livewire:terminal :code="'npm i @flexilla/alpine-autoresize-area'" />
                    <x-md.paragraph>Initialize Auto resize in <x-docs.inline-code text="app.js" /></x-md.paragraph>

                    <livewire:load-code :name="['add-auto-resize-in-app']" />

                </x-md.ol>
            </x-docs.step>
        </x-docs.steps>
    
    <x-md.h2>With label</x-md.h2>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.text-area.with-label" />
</x-layouts.doc-page-wrapper>
