<form class="space-y-4 w-full text-fg">
    <div class="relative">
        <x-ui.input type="email" placeholder="Your email here" class="ps-9" />
        <span aria-hidden="true" class="absolute left-3 h-full flex items-center top-0 text-fg pointer-events-none">
            <span class="flex text-lg iconify ph--at"></span>
        </span>
    </div>
    <div class="relative">
        <x-ui.input type="text" placeholder="Your email here" class="ps-11" />
        <span aria-hidden="true"
            class="absolute text-sm left-3 h-full flex items-center top-0 text-fg pointer-events-none">
            CDF
        </span>
    </div>
    <div class="relative">
        <x-ui.input type="text" placeholder="Your email here" class="ps-16" />
        <span aria-hidden="true"
            class="absolute text-sm left-3 h-full flex items-center top-0 text-fg pointer-events-none">
            https://
        </span>
    </div>
    <div class="flex">
        <span aria-hidden="true"
            class="px-3 flex items-center text-fg form-input-gray rounded-l-md border-y border-l border-border-strong/90 pointer-events-none">
            <span class="flex text-lg iconify ph--at"></span>
        </span>
        <x-ui.input radius="none" type="text" placeholder="Your email here" class="rounded-r-md" />
    </div>
</form>
