<x-docs.ui-tabs :values="[['text' => 'Manually', 'value' => 'manual'], ['text' => 'With CLI', 'value' => 'cli']]">
    <x-docs.tab-panel value="manual" active>
        {{ $slot }}
    </x-docs.tab-panel>
    <x-docs.tab-panel value="cli">
        @if (isset($cli))
            {{ $cli }}
        @else
            Coming soon...
        @endif
    </x-docs.tab-panel>
</x-docs.ui-tabs>
