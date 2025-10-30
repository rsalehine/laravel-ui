<x-docs.ui-tabs :values="[ ['text' => 'CLI', 'value' => 'cli'],['text' => 'Manually', 'value' => 'manual'],]">
    <x-docs.tab-panel value="cli" active>
        @if (isset($cli))
            {{ $cli }}
        @else
            Coming soon...
        @endif
    </x-docs.tab-panel>
    <x-docs.tab-panel value="manual">
        {{ $slot }}
    </x-docs.tab-panel>
</x-docs.ui-tabs>
