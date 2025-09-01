<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>
<main class="pt-13">

    <section
        class="relative h-max min-h-[calc(100dvh-4rem)] flex items-center justify-center before:absolute before:inset-x-0 before:h-px before:bg-border dark:before:bg-border-strong before:-top-2.5">
        <div class="absolute inset-0 flex justify-center px-3.5">
            <div
                class="flex h-full relative bg-bg border border-border dark:border-border-strong rounded-global w-full max-w-[85rem] pointer-events-none before:absolute before:-left-2.5 before:-right-2.5 before:-top-2.5 before:-bottom-2.5 before:border-x before:border-border dark:before:border-border-strong">
            </div>
        </div>

        <div class="absolute inset-0 px-3.5 flex justify-center items-end">
            <div aria-hidden="true"
                class="relative w-full h-3/4 max-w-[85rem] grid grid-cols-7 sm:grid-cols-9 md:grid-cols-12 gap-2 items-end rounded-global overflow-hidden">
                <span aria-hidden="true" class="flex bg-gradient-to-t from-bg-muted/60 h-2/5"></span>
                <span aria-hidden="true" class="flex bg-gradient-to-t from-bg-muted/60 h-3/5"></span>
                <span aria-hidden="true" class="hidden sm:flex bg-gradient-to-t from-bg-muted/60 h-4/5"></span>
                <span aria-hidden="true" class="hidden md:flex bg-gradient-to-t from-bg-muted/60"></span>
                <span aria-hidden="true" class="flex bg-gradient-to-t from-bg-muted/60"></span>
                <span aria-hidden="true" class="flex bg-gradient-to-t from-bg-muted/60"></span>
                <span aria-hidden="true" class="hidden md:flex bg-gradient-to-t from-bg-muted/60"></span>
                <span aria-hidden="true" class="flex bg-gradient-to-t from-bg-muted/60"></span>
                <span aria-hidden="true" class="hidden md:flex bg-gradient-to-t from-bg-muted/60"></span>
                <span aria-hidden="true" class="hidden sm:flex bg-gradient-to-t from-bg-muted/60 h-4/5"></span>
                <span aria-hidden="true" class="flex bg-gradient-to-t from-bg-muted/60 h-3/5"></span>
                <span aria-hidden="true" class="flex bg-gradient-to-t from-bg-muted/60 h-2/5"></span>
            </div>
        </div>
        <div class="relative py-20 md:py-28 max-w-6xl flex flex-col items-center text-center px-4">
            <a href=""
                class="ring ring-border-strong/80 bg-bg text-fg pl-(--annonce-padding) pr-2 py-(--annonce-padding) rounded-(--annonce-radius) [--annonce-padding:--spacing(0.5)] [--annonce-radius:var(--global-main-radius)] text-sm flex items-center gap-1">
                <span
                    class="bg-bg-muted text-fg-title rounded-[calc(var(--annonce-radius)-var(--annonce-padding))] px-2 py-0.5">
                    Soon
                </span>
                <span>
                    Introducing Flexiwind
                </span>
            </a>
            <h1
                class="text-transparent bg-clip-text bg-gradient-to-bl from-fg-title to-fg-muted/60 font-semibold text-4xl sm:text-5xl text-balance md:text-6xl/tight capitalize max-w-3xl mt-6">
                Discover a new way to build Laravel UI with ease
            </h1>
            <p class="max-w-md pt-8 text-fg-muted text-sm">
                Flexiwind provides you with a set of modern Laravel/Livewire components and blocks that will help you
                build your UI faster and more efficiently.
            </p>
            <div class="flex items-center justify-center flex-wrap gap-2 mt-9">
                <x-ui.modal.trigger intent="primary" variant="solid" modalId="waitlist-modal" size="md">
                    Join waitlist
                </x-ui.modal.trigger>
                <x-ui.button variant="outline" intent="gray">
                    Learn more
                </x-ui.button>
            </div>
        </div>
    </section>

    <livewire:waitlist-modal></livewire:waitlist-modal>
</main>
