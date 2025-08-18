@php
    $links = [
        [
            'title' => 'Discord Server',
            'href' => '',
            'icon' => 'ph--discord-logo',
        ],
        [
            'title' => 'Github Account',
            'href' => '',
            'icon' => 'ph--github-logo',
        ],
        [
            'title' => 'X account',
            'href' => '',
            'icon' => 'ph--x-logo',
        ],
    ];
@endphp

<div class="flex items-center gap-x-0.5">
    @foreach ($links as $link)
        <x-atoms.ui-link
            :href="$link['href']" 
            aria-label="{{ $link['title'] }}" 
            class="btn btn-icon-sm rounded-[--global-main-radius] btn-ghost btn-ghost-gray"
        >
            <span aria-hidden="true" class="flex iconify {{ $link['icon'] }}"></span>
        </x-atoms.ui-link>
    @endforeach
</div>