@props(['radius' => 'circle', 'class' => '', 'noBg' => false])

@php
    $squeleton_radius = [
        'sm' => 'rounded-sm',
        'base' => 'rounded',
        'lg' => 'rounded-lg',
        'xl' => 'rounded-xl',
        'circle' => 'rounded-full',
    ];
    $bgClass = $noBg ? '' : 'bg-bg-surface-elevated';
    $sk_radius = $squeleton_radius[$radius] ?? $squeleton_radius['circle'];
    $className = "animate-pulse {$bgClass} {$sk_radius} {$class}";
@endphp

<div {{ $attributes->merge([
    'class' => $className,
]) }}></div>
