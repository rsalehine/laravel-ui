@props(['popoverId', 'variant' => 'none', 'intent' => 'none','size'=>'none', 'radius'=>'lg'])

<x-ui.button data-popover-trigger data-popover-id="popover-{{ $popoverId }}" :size="$size" :radius="$radius" :variant="$variant" :intent="$intent"
    {{ $attributes->merge(['class' => 'group']) }}>
    {{ $slot }}
</x-ui.button>
