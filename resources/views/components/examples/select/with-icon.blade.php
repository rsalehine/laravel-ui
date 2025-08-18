<form action="#" class="space-y-4 w-full text-fg">
    <div class="relative">
        <x-ui.select name="select-country_label_1" id="select-country_label_1" class="ps-11">
            <option value="DRC">DR Congo</option>
            <option value="TZ">Tanzania</option>
            <option value="MA">Morocco</option>
            <option value="NG">Nigeria</option>
        </x-ui.select>
        <span aria-hidden="true" class="absolute left-3 h-full flex items-center top-0 text-fg pointer-events-none">
            <span aria-hidden="true" class="flex iconify ph--flag text-lg"></span>
        </span>
    </div>

    <div class="flex">
        <span aria-hidden="true"
            class="p-2 flex items-center text-fg bg-bg-subtle rounded-r-md border-y border-l border-border-strong/90 pointer-events-none">
            <span aria-hidden="true" class="flex iconify ph--flag text-lg"></span>
        </span>
        <x-ui.select radius="none" class="rounded-r-lg" name="select-country_label_2" id="select-country_label_2">
            <option value="DRC">DR Congo</option>
            <option value="TZ">Tanzania</option>
            <option value="MA">Morocco</option>
            <option value="NG">Nigeria</option>
        </x-ui.select>
    </div>
</form>
