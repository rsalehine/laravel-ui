@props([
    'type' => 'text',
    'size' => 'md',
    'disabled' => false,
    'readonly' => false,
    'label' => null,
    'noBorder' => false,
    'inlinedLabel' => false,
    'labelClass' => '',
    'radius' => 'lg',
    'autoResize' => false,
    'resizeNone' => false,
])

@php
    $sizes = [
        'sm' => 'ui-form-input-sm',
        'md' => 'ui-form-input-md',
        'lg' => 'ui-form-input-lg',
    ];
    $input_radius = [
        'none' => '',
        'sm' => 'rounded-sm',
        'md' => 'rounded-md',
        'lg' => 'rounded-lg',
        '3xl' => 'rounded-3xl',
        'full' => 'rounded-full',
    ];
    $resize_class = $resizeNone ? 'resize-none' : '';
    $radius_ = $input_radius[$radius] ?? $input_radius['lg'];

    $border_class = $noBorder ? 'border-transparent' : 'border border-border-input shadow-sm bg-bg';
    $baseClasses = "ui-form-base ui-form-input {$radius_} {$border_class} {$resize_class} text-fg";
    $sizeClasses = $sizes[$size] ?? $sizes['md'];

    $id = $attributes->get('id') ?? $attributes->get('name', uniqid('input-'));

    $attributes = $attributes->class([$baseClasses, $sizeClasses])->merge([
        'type' => $type,
        'disabled' => $disabled,
        'readonly' => $readonly,
        'id' => $id,
    ]);

    $group_wrapper = $inlinedLabel ? 'flex items-center gap-2' : 'flex flex-col space-y-2';
@endphp

@if ($label)
    <div class="{{ $group_wrapper }}">
        <x-ui.label for="{{ $id }}" :text="$label" class="{{ $labelClass }}" />
        <textarea {{ $attributes }} @if ($autoResize) x-auto-resize-area @endif>{{ $slot }}</textarea>
    </div>
@else
    <textarea {{ $attributes }} @if ($autoResize) x-auto-resize-area @endif>{{ $slot }}</textarea>
@endif
