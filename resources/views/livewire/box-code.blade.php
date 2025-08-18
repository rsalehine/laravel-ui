<div data-code-block
    class="border border-gray-200 dark:border-gray-800/60 ui-card [--card-padding:--spacing(1)] [--card-radius:var(--global-main-radius)] bg-gray-800 dark:bg-gray-900/50 grid mt-2.5 first:mt-0 text-gray-300">
    <x-docs.block-code title="{{ $title }}" icon="{{ $icon }}" shell-style="{{ $shellStyle }}">
        <x-docs.code-view-box :no-copy-button="true" class="bg-(--astro-code-color-background) inner-radius">
            <livewire:render-block-code :code="$data['code']" :lang="$data['lang']" :lines="$data['lines']??[]" />
        </x-docs.code-view-box>
    </x-docs.block-code>

</div>
