
<form action="#" class="space-y-4 w-full text-fg">
    <div class="relative">
        <x-ui.input type="search" placeholder="Start tapping..."/>
        <span aria-hidden="true" class="absolute right-3 h-full flex items-center top-0 text-fg pointer-events-none">
            <span aria-hidden="true" class="flex iconify ph--magnifying-glass text-lg"></span>                                                  
        </span>
    </div>
    <div class="relative">
        <x-ui.input type="text" placeholder="Your email here" class="pe-11"/>
        <span aria-hidden="true" class="absolute text-sm right-3 h-full flex items-center top-0 text-fg pointer-events-none">
            CDF                         
        </span>
    </div>
    <div class="relative">
        <x-ui.input type="text" placeholder="Your email here" class="pe-24 "/>
        <span aria-hidden="true" class="absolute text-sm right-3 h-full flex items-center top-0 text-fg pointer-events-none">
            @gmail.com                         
        </span>
    </div>
    <div class="flex">
        <x-ui.input radius="none" type="text" placeholder="Your email here" class="rounded-l-lg"/>
        <span aria-hidden="true" class="p-2 flex items-center text-fg bg-bg-subtle rounded-r-md border-y border-r border-border-strong/90 pointer-events-none">
            <span aria-hidden="true" class="flex iconify ph--envelope-open text-lg"></span>                        
        </span>
    </div>
</form>