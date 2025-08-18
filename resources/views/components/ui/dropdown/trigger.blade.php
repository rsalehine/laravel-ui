@props(['dropdownId', 'variant' => 'none', 'intent' => 'none','size'=>'none','radius'=>'lg'])

<x-ui.button data-dropdown-trigger data-dropdown-id="dropdown-{{ $dropdownId }}" :size="$size" :variant="$variant" :intent="$intent" :radius="$radius"
    {{ $attributes->merge(['class' => 'group']) }}>
    {{ $slot }}
</x-ui.button>
