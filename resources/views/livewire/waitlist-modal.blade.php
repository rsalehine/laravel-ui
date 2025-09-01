<x-ui.modal modalId="waitlist-modal">
    <x-ui.modal.content no-gutter size="sm" :closable="false" class="animated-modal-content p-0.5"
        data-enter-animation="fadeIn .4s linear" data-exit-animation="fadeOut .1s linear">

        <x-ui.modal.header padding-none class="relative w-full p-4 flex items-center gap-2">
            <span class="ui-soft ui-soft-gray size-12 d-flex-place-center rounded-full">
                <span class="iconify ph--cube text-xl"></span>
            </span>
            <div class="flex flex-col flex-1">
                <x-ui.modal.title>Waitlist</x-ui.modal.title>
                <x-ui.modal.description>Join the waitlist to get early access to Flexiwind.</x-ui.modal.description>
            </div>
        </x-ui.modal.header>
        <x-ui.modal.body no-gutter
            class="mb-2 bg-bg-surface border border-border ui-card [--card-radius:var(--global-main-radius)] [--card-padding:--spacing(4)] shadow-sm">
            <form action="" class="w-full relative">
                <x-ui.input type="email" placeholder="johndoe@gmail.com" />
                <x-ui.button intent="primary" radius="none" size="sm" class="absolute right-0.5 top-1/2 -translate-y-1/2 rounded-md">
                    Join waitlist
                </x-ui.button>
            </form>
        </x-ui.modal.body>
        <x-ui.modal.footer class="[--gutter:--spacing(2)] flex items-center justify-end text-xs text-fg-muted">
            <x-ui.modal.close intent="gray" variant="outline">
                Close
            </x-ui.modal.close>
        </x-ui.modal.footer>
    </x-ui.modal.content>
</x-ui.modal>
