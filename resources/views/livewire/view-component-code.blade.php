<x-docs.code-view-box class="bg-(--astro-code-color-background) inner-radius">
    <livewire:render-block-code :lazy="$isLazy ? 'on-load' : false" :code="$code" lang="blade" />
</x-docs.code-view-box>
