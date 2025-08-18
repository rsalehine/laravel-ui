<li>
    <a
        wire:navigate
        href="{{ $path }}"
        aria-label="Link to {{ $title }}"
        data-state="{{ $isActive ? 'active' : 'inactive' }}"
        class="flex items-center gap-x-2.5 fx-active:font-600 fx-active:text-fg-title text-fg hover:text-fg-title"
    >
        <span
            aria-hidden="true"
            class="size-7 flex items-center justify-center rounded-lg {{ $isActive ? 'ui-subtle ui-subtle-gray' : 'border border-border' }}"
        >
            <span class="flex iconify {{ $icon }} text-sm"></span>
        </span>
        <span>
            {{ $title }}
        </span>
    </a>
</li>