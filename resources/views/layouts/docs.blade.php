@php
    use App\Support\SidebarPaginator;

    $path = '/' . ltrim(request()->path() ?: '', '/');
    $current = SidebarPaginator::getCurrent($path);

    $seo = [
        'ogImage' => [
            'src' => $current['ogImage']['src'] ?? config('base.default_og_image'),
            'alt' => $current['ogImage']['alt'] ?? config('base.default_og_alt'),
        ],
        'keywords' => trim(config('base.keywords_def') . ($current['keywords'] ? ', ' . $current['keywords'] : '')),
        'title' => 'Flexiwind | ' . $current['title'],
        'description' => $current['seoDescription'] ?? 'Easily add interactive Components to your App.',
    ];
@endphp

<x-layouts.base body-class="bg-bg " :seo="$seo">
    <x-slot name="head">
        @vite(['resources/css/scrollbar.css', 'resources/css/code-theme.css', 'resources/css/docs.css', 'resources/js/docs.js'])
    </x-slot>
    <x-organisms.doc-navbar />
    <div
        class="grid lg:grid-cols-[16rem_minmax(0,1fr)] xl:grid-cols-[17rem_minmax(0,1fr)] lg:pl-8 xl:pr-8 docs-container">
        <x-organisms.doc-sidebar :active-group="$activeGroup" />
        <div class="grid relative">
            <x-molecules.top-docs-nav />
            {{ $slot }}
            <x-organisms.doc-footer />
        </div>
    </div>

    <div role="list" x-dropdown id="dropdown-sidebar"
        class="z-130 invisible opacity-0 fx-open:visible fx-open:opacity-100 ease-linear duration-200 ui-popper w-[17rem] lg:w-[16rem] bg-bg border border-border ui-card [--card-padding:calc(var(--spacing)*0.5)] [--card-radius:var(--global-main-radius)]">
        <x-blocks.list-ui-kits />
    </div>
    <x-blocks.modal-search />
</x-layouts.base>
