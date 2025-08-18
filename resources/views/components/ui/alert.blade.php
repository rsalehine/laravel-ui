@props(['class' => '', 'variant' => 'solid', 'intent' => 'gray', 'size' => 'default', 'radius'=>'md'])

@php
    use App\Flexiwind\UiHelper;
    $variants = UiHelper::getVariants();

    $radius_class = UiHelper::getRadius($radius);

    $sizes = [
        'default' => 'p-4 text-sm',
        'xs' => 'p-1.5 text-xs',
        'sm' => 'p-2.5 text-sm',
        'lg' => 'p-5',
    ];
    
    $base = "relative w-full {$sizes[$size ?? 'default']} ";

    $variantClass = $variant == 'default' ? ' bg-bg-subtle text-fg' : UiHelper::getClasses($variant, $intent);

    $className = "{$base} {$variantClass} {$class} {$radius_class}";
@endphp

<div {{ $attributes->merge(['class' => $className]) }}>
    {{ $slot }}
</div>