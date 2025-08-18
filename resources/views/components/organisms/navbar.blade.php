<header class="px-2 sm:px-4 pt-2 sm:pt-4 w-full">
    <nav
        class="max-w-4xl bg-bg shadow-sm border border-border/60 dark:border-border-strong shadow-gray-50 dark:shadow-none mx-auto w-full flex justify-between ui-card [--card-padding:calc(var(--spacing)*4)] [--card-radius:var(--radius-xl)]">
        <a href="/" class="hidden min-[34rem]:flex gap-2 items-center">
            <div class="relative w-7 h-7 overflow-hidden flex rounded-xl">
                <span class="absolute w-4 h-4 -top-1 -right-1 bg-fg-title rounded-md rotate-45"></span><span
                    class="absolute w-4 h-4 -bottom-1 -right-1 bg-fg-title rounded-md rotate-45"></span><span
                    class="absolute w-4 h-4 -bottom-1 -left-1 bg-fg-title rounded-md rotate-45"></span><span
                    class="absolute w-2 h-2 rounded-full bg-fg-title top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
            </div>
        </a>
        <div class="flex lg:flex-1 lg:px-10">
            <x-molecules.nav-items />
        </div>

        <div class="flex items-center gap-1.5 w-max">
            <x-ui.modal.trigger modal-id="search-modal" size="icon-sm" variant="flexi" intent="white" radius="none"
                class="rounded-global">
                <span class="iconify ph--magnifying-glass text-sm"></span>
            </x-ui.modal.trigger>
            <x-atoms.ui-link href=""
                class="max-[22rem]:hidden btn btn-icon-sm btn-flexi btn-flexi-white text-fg rounded-global">
                <span class="iconify ph--github-logo"></span>
            </x-atoms.ui-link>
            <x-atoms.ui-link href=""
                class="max-[22rem]:hidden btn btn-icon-sm btn-flexi btn-flexi-white text-fg rounded-global">
                <span class="iconify ph--discord-logo"></span>
            </x-atoms.ui-link>
        </div>
        <x-atoms.ui-link href="#" aria-label="Link to club page" class="ml-1.5 btn h-8 text-sm px-3 btn-solid btn-solid-primary rounded-lg text-white">
            <span class="iconify ph--cube text-xs mr-1 hidden min-[560px]:flex"></span>
            Join the club
        </x-atoms.ui-link>
    </nav>
</header>
