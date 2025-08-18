@props(['class' => '', 'variant' => 'solid', 'intent' => 'gray', 'size' => 'default', 'radius' => 'md'])

@php
    use App\Flexiwind\UiHelper;
    $variants = UiHelper::getVariants();
    $radius_class = UiHelper::getRadius($radius);
    $sizes = [
        'default' => 'badge-md',
        'xs' => 'badge-xs',
        'sm' => 'badge-sm',
        'lg' => 'badge-lg',
    ];

    $variantClass = $variant == 'default' ? ' bg-bg-subtle text-fg' : UiHelper::getClasses($variant, $intent);

    $className = "{$sizes[$size ?? 'default']} {$variantClass} {$radius_class} {$class}";
@endphp
<span {{ $attributes->merge(['class' => $className]) }}>
    {{ $slot }}
</span>
