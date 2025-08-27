@props([
    'type' => 'text',
    'size' => 'md',
    'disabled' => false,
    'readonly' => false,
    'noBorder' => false,
    'radius' => 'lg',
    'unStylled' => false,
])

<x-ui.input data-pin-input maxlength="1" :type="$type" :size="$size" :disabled="$disabled" :readonly="$readonly"
    :no-border="$noBorder" :radius="$radius" :un-stylled="$unStylled" {{ $attributes->class(['text-center']) }}/>