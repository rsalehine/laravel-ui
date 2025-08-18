@if ($noInTabs)
    <div
        class="grid w-full gap-1 border border-gray-200 dark:border-gray-800/60 ui-card [--card-padding:--spacing(1)] [--card-radius:var(--global-main-radius)] bg-gray-50 dark:bg-gray-900/50 my-5 first:mt-0">
        <div
            class="inner-radius p-4 md:p-10 bg-bg shadow border border-gray-200 dark:border-gray-800/60 flex justify-center min-h-max">
            @if ($isLivewire)
                <span>
                    Sorry can't resolve this
                </span>
            @else
                <x-dynamic-component :component="$componentPreview" />
            @endif
        </div>
        <livewire:view-component-code :is-lazy="false" :file-path="$filePath" />
    </div>
@else
    <x-docs.docs-tab :values="[
        ['text' => 'Preview', 'icon' => 'ph--eye', 'value' => 'Preview'],
        ['text' => 'Code', 'icon' => 'ph--code', 'value' => 'Code'],
    ]"
        triggersClass="px-3 py-1 rounded-(--global-main-radius) fx-active:bg-white fx-active:dark:bg-gray-800 border border-transparent fx-active:border-gray-200 fx-active:dark:border-gray-700/60 fx-active:shadow"
        tabListContainer="" tabList="pb-2 pt-2" docPanelClass="rounded-[8px]">
        <x-docs.tab-panel value="Preview"
            class="border border-gray-200 dark:border-gray-800/60 ui-card [--card-padding:--spacing(1)] [--card-radius:var(--global-main-radius)] bg-gray-50 dark:bg-gray-900/50 items-center justify-center min-h-60 lg:min-h-80"
            active>
            <div
                class="size-full inner-radius flex items-center justify-center p-4 md:p-10 bg-bg shadow border border-gray-200 dark:border-gray-800/60">
                @if ($isLivewire)
                    <span>
                        Sorry can't resolve this
                    </span>
                @else
                    <x-dynamic-component :component="$componentPreview" />
                @endif
            </div>
        </x-docs.tab-panel>
        <x-docs.tab-panel value="Code" show-with-grid
            class="border border-gray-200 dark:border-gray-800/60 ui-card [--card-padding:--spacing(1)] [--card-radius:var(--global-main-radius)] bg-gray-800 dark:bg-gray-900/50 overflow-hidden">
            <livewire:view-component-code :file-path="$filePath" />
        </x-docs.tab-panel>
    </x-docs.docs-tab>
@endif
