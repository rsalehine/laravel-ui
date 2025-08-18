@props(['activeGroup'])

@php
    $groups = [
        [
            'name' => 'getting-started',
            'title' => 'Getting Started',
            'path' => '/docs/introduction',
            'icon' => 'ph--sparkle',
        ],
        [
            'name' => 'components',
            'title' => 'Components',
            'path' => '/components/accordion',
            'icon' => 'ph--diamonds-four',
        ],
                [
            'name' => 'blocks',
            'title' => 'Blocks',
            'path' => '/blocks/application',
            'icon' => 'ph--cube',
        ],
        [
            'name' => 'templates',
            'title' => 'Templates',
            'path' => '/templates',
            'icon' => 'ph--airplay',
        ],
        [
            'name' => 'resources',
            'title' => 'Resources',
            'path' => '/resources',
            'icon' => 'ph--puzzle-piece',
        ],
    ];
    $sidebarItems = config('sidebar');

    $path = request()->path();
    if ($path === '') {
        $path = '/';
    } else {
        $path = '/' . $path;
    }
@endphp


<div aria-hidden="true" data-sidebar-overlay
    class="fixed inset-0 bg-gray-800/30 z-100 backdrop-blur-md hidden fx-open:flex lg:hidden"></div>
<aside data-app-sidebar class="docs-sidebar max-lg:bg-bg z-120 lg:z-35 pt-4 border-r border-border flex flex-col">
    <button data-close-sidebar aria-label="Close Sidebar"
        class="size-8 text-fg border border-border bg-bg ease-linear absolute top-16 -right-3 flex items-center justify-center lg:hidden rounded-lg z-10">
        <span aria-hidden="true" class="flex iconify ph--caret-left"></span>
    </button>
    <div class="flex h-max pb-5 px-5 lg:pl-0 lg:pr-4">
        <button data-dropdown-trigger data-dropdown-id="dropdown-sidebar"
            class="btn border w-full border-border gap-3 p-1.5 pr-3 rounded-lg hover:bg-bg-subtle/80 bg-bg">
            <div class="text-fg flex items-center w-full justify-between">
                <span class="p-2 rounded bg-bg-subtle text-lg text-fg mr-3">
                    <span class="flex iconify simple-icons--laravel"></span>
                </span>
                <div class="truncate flex flex-col flex-1 text-left">
                    <h2 class="text-sm font-medium text-fg-title">Laravel</h2>
                    <p class="text-xs text-fg-muted truncate">Set up your documentation</p>
                </div>
                <span class="ml-2 flex iconify ph--caret-up-down text-xs"></span>
            </div>
        </button>
    </div>

    <x-atoms.scrollable-y class="w-full">
        <nav class="w-full space-y-6 relative px-5 lg:pl-0 lg:pr-4 h-full">
            <ul class="space-y-3 text-fg">
                @foreach ($groups as $group)
                    <x-molecules.group-item :is-active="$activeGroup === $group['name']" :name="$group['name']" :title="$group['title']" :path="$group['path']"
                        :icon="$group['icon']" />
                @endforeach
            </ul>
            @foreach ($sidebarItems as $item)
                <x-molecules.sidebar-group :label="$item['label']" :items="$item['items']" :active-item="$path" />
            @endforeach
        </nav>
    </x-atoms.scrollable-y>
</aside>
