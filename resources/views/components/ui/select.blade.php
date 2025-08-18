@props([
    'size' => 'md',
    'disabled' => false,
    'readonly' => false,
    'label' => null,
    'noBorder' => false,
    'inlinedLabel' => false,
    'labelClass' => '',
    'radius' => 'lg',
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
    $radius_ = $input_radius[$radius] ?? $input_radius['lg'];

    $border_class = $noBorder ? 'border-transparent' : 'border border-border-input shadow-sm bg-bg';
    $baseClasses = "ui-form-base ui-form-input ui-form-select {$radius_} {$border_class} text-fg";
    $sizeClasses = $sizes[$size] ?? $sizes['md'];

    $id = $attributes->get('id') ?? $attributes->get('name', uniqid('input-'));

    $attributes = $attributes->class([$baseClasses, $sizeClasses])->merge([
        'disabled' => $disabled,
        'readonly' => $readonly,
        'id' => $id,
    ]);

    $group_wrapper = $inlinedLabel ? 'flex items-center gap-2' : 'flex flex-col space-y-1';
@endphp

@if ($label)
    <div class="{{ $group_wrapper }}">
        <x-ui.label for="{{ $id }}" :text="$label" class="{{ $labelClass }}" />
        <select {{ $attributes }}>
            {{ $slot }}
        </select>
    </div>
@else
    <select {{ $attributes }}>
        {{ $slot }}
    </select>
@endif