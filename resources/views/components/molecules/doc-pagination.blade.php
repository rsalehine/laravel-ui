@php

@endphp

<div class="grid">
    <div
        class="flex w-full justify-between gap-4 bg-bg-subtle/70 rounded-lg p-1 ease-linear duration-300 overflow-hidden">
        @if ($prevSlug)
            @if ($nextSlug)
                <x-atoms.ui-link href="{{ $prevSlug['slug'] }}"
                    class="flex items-center px-5 h-16 text-gray-500 hover:text-fg-title" wire:navigate>
                    <div class="flex items-center gap-x-1 text-sm">
                        <span aria-hidden="true" class="flex iconify ph--caret-left"></span>
                        <span>Prev</span>
                    </div>
                </x-atoms.ui-link>
            @else
                <x-atoms.ui-link href="{{ $prevSlug['slug'] }}"
                    class="group flex *:first:pr-4 *:last:pl-4 items-center px-4 h-16 text-fg-subtitle hover:text-fg-title flex-1 rounded-md bg-bg divide-x divide-border-strong/40 hover:ring-1 hover:ring-gray-200 dark:hover:ring-gray-800 ease-linear duration-300"
                    wire:navigate>
                    <div
                        class="flex items-center gap-x-1 text-sm pl-3 border-r border-border text-gray-500 group-hover:text-fg-title ease-linear duration-300">
                        <span aria-hidden="true" class="flex iconify ph--caret-left"></span>
                        <span>Prev</span>
                    </div>
                    <div class="flex flex-1 flex-col justify-center text-sm">
                        <span class="line-clamp-1">{{ $prevSlug['title'] }}</span>
                        <p class="text-fg-muted font-light truncate line-clamp-1">
                            {{ Str::limit($prevSlug['description'], 20) }}
                        </p>
                    </div>
                </x-atoms.ui-link>
            @endif
        @endif

        @if ($nextSlug)
            <x-atoms.ui-link href="{{ $nextSlug['slug'] }}"
                class="group flex *:first:pr-4 *:last:pl-4 items-center px-4 h-16 text-fg hover:text-fg-title flex-1 rounded-md bg-bg divide-x divide-border-strong/40 hover:ring-1 hover:ring-gray-200 dark:hover:ring-gray-800 ease-linear duration-300"
                wire:navigate>
                <div class="flex flex-1 flex-col justify-center text-sm text-right">
                    <span class="line-clamp-1">{{ $nextSlug['title'] }}</span>
                    <p class="text-fg-muted font-light truncate line-clamp-1 text-wrap text-right lg:pl-10">
                        {{ $nextSlug['description'] }}
                    </p>
                </div>
                <div
                    class="flex items-center gap-x-1 text-sm pl-3 border-r border-border text-gray-500 group-hover:text-fg-title ease-linear duration-300">
                    <span>Next</span>
                    <span aria-hidden="true" class="flex iconify ph--caret-right"></span>
                </div>
            </x-atoms.ui-link>
        @endif
    </div>
</div>
