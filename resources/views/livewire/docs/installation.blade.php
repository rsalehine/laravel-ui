@php
    $links = [
        [
            'href' => 'https://tailwindcss.com',
            'title' => 'Tailwindcss',
            'description' => 'Utility-first CSS framework.',
            'icon' => 'simple-icons--tailwindcss',
        ],
        [
            'href' => 'https://laravel.com',
            'title' => 'Laravel',
            'description' => 'PHP web framework.',
            'icon' => 'simple-icons--laravel',
        ],
        [
            'href' => 'https://alpinejs.dev',
            'title' => 'Alpine.js',
            'description' => 'Minimal JS behavior framework.',
            'icon' => 'simple-icons--alpinedotjs',
        ],
    ];

@endphp

<x-layouts.doc-page-wrapper :current="$current" :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug" :links="[]">
    <x-md.h2>Prerequisites</x-md.h2>
    <x-md.paragraph>
        Requires the following before installing:
    </x-md.paragraph>
    <x-docs.links-grid :links="$links" />

    <x-md.h2>Installation</x-md.h2>

    <x-docs.steps>
        <x-docs.step>
            <x-md.h3>Create new laravel Project</x-md.h3>

            <x-md.paragraph>Create a new Laravel Project if you don't have one</x-md.paragraph>

            <livewire:terminal code="laravel create my-app && cd my-app" />
            <x-md.paragraph>Normally after creating a new project no matter if you've selected a starter or not,
                tailwindcss will be installed by default so if not the case go to the next step</x-md.paragraph>
        </x-docs.step>
        <x-docs.step>
            <x-md.h3>Install TailwindCSS</x-md.h3>
            <x-md.paragraph>Skip this step if tailwindcss is already installed</x-md.paragraph>

            <x-md.ol>
                <x-md.li><strong>Installation</strong></x-md.li>

                <x-md.paragraph>Install <x-docs.inline-code text="@tailwindcss/vite" /> and its peer dependencies via
                    npm.</x-md.paragraph>

                <livewire:terminal code="npm install tailwindcss @tailwindcss/vite" />

                <x-md.paragraph>For more details Follow the this <x-docs.link
                        href="https://tailwindcss.com/docs/installation/framework-guides/laravel"> Guide </x-docs.link>
                </x-md.paragraph>


                <x-md.li><strong>Add Flexilla Utilities</strong></x-md.li>


                <x-md.paragraph>Once you've TailwindCSS installed, create a CSS file in src (Name it as you
                    want)</x-md.paragraph>

                <livewire:load-code :name="['app-css-file', 'flexiwind', 'key-frames']" />

                <x-md.paragraph>
                    For more about theming following this <x-docs.link href="/docs/theme">guide</x-docs.link>
                </x-md.paragraph>
                <x-docs.callout intent="gray" class="flex flex-col" type="note">
                    <p>
                        Button styles and ui Utilities are very important so you need to add them. These utilities come
                        with different styles (variant & intent) for things like btn-solid-primary ui-soft-danger, etc.
                    </p>
                    <x-md.ul>
                        <x-md.li>
                            <x-docs.doc-link href="/docs/theme/buttons">
                                Buttons
                            </x-docs.doc-link>
                        </x-md.li>
                        <x-md.li>
                            <x-docs.doc-link href="/docs/theme/utilities">
                                UI Utitities
                            </x-docs.doc-link>
                        </x-md.li>
                    </x-md.ul>
                </x-docs.callout>

                <x-md.li><strong>Add FLEXIWIND Support Helpers</strong></x-md.li>
                <p>
                    Create a folder named <x-docs.inline-code text="Flexiwind" /> inside <x-docs.inline-code text="app"/> folder, and add these 2 files.
                </p>
                <livewire:load-code :name="['button-helper', 'ui-helper']" />

                <x-md.li><strong>Update Vite config</strong></x-md.li>
                <livewire:load-code :name="['vite-config']" />



                <x-md.li><strong>Import CSS File</strong></x-md.li>
                <x-md.paragraph>Import the created CSS file in your Layout.</x-md.paragraph>

            </x-md.ol>
        </x-docs.step>
        <x-docs.step>

            <x-md.h3>Add interactivity with Flexilla Plugins</x-md.h3>
            <x-md.paragraph>
                If you're willing to use interactive component then make sure to have corresponding plugin from
                <x-docs.link href="https://flexiwind.vercel.app/docs/">Flexilla</x-docs.link>
            </x-md.paragraph>

            <livewire:terminal code="npm i @flexilla/alpine-dropdown" />

            <x-md.paragraph>To init all components</x-md.paragraph>

            {{-- <BoxCode title={"script.js"} icon={"js"}>
                ```ts
                import {initFlexilla} from "@flexilla/flexilla"

                initFlexilla()
                ```
            </BoxCode> --}}

            <x-md.h3>Add interactivity (Without AlpineJS) (Optional)</x-md.h3>
            <x-md.paragraph>
                If you're willing to use interactive component then make sure to have
                <x-docs.link href="https://flexiwind.vercel.app/docs/">Flexilla</x-docs.link> installed or the
                corresponding Flexilla.
            </x-md.paragraph>

            <livewire:terminal code="npm i @flexilla/flexilla" />

            <x-md.paragraph>To init all components</x-md.paragraph>

            {{-- <BoxCode title={"script.js"} icon={"js"}>
                    ```ts
                    import {initFlexilla} from "@flexilla/flexilla"

                    initFlexilla()
                    ```
                </BoxCode> --}}

        </x-docs.step>
    </x-docs.steps>
</x-layouts.doc-page-wrapper>
