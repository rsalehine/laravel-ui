@if (!$isSingle)
    <livewire:load-code-in-tab :data="$data" />
@else
    <livewire:single-code-block :data="$data"/>
@endif
