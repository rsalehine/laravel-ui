<x-layouts.doc-page-wrapper :current="$current" :prev-slug="$prevSlug" :next-slug="$nextSlug">
    <x-md.h2>Demo</x-md.h2>
    <livewire:component-tab-preview-code component="components.examples.otp.demo" no-in-tabs/>

    <x-md.h2>Installation</x-md.h2>
    <x-docs.tabs-installation>
        <x-md.paragraph>
            First you need to copy the code from the source tab.
        </x-md.paragraph>
        <x-md.paragraph>
            Then you need to paste the code in your project's <x-docs.inline-code
                text="otp.blade.php" /> file insise your <strong>resources/views/components/ui/</strong> folder.
        </x-md.paragraph>
        <livewire:component-source :data="['resources/views/components/ui/otp.blade.php', 'resources/views/components/ui/otp/input.blade.php']" />
    </x-docs.tabs-installation>


    <x-md.h2>Examples</x-md.h2>

    <x-md.h3>Numeric OTP</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.otp.numeric" no-in-tabs/>

    <x-md.h3>Alphabetic OTP</x-md.h3>
    <livewire:component-tab-preview-code component="components.examples.otp.alpha" no-in-tabs/>

    <x-md.h3>Alpha Numeric OTP</x-md.h3>
    <livewire:component-tab-preview-code no-in-tabs component="components.examples.otp.alpha-numeric" no-in-tabs/>

</x-layouts.doc-page-wrapper>
