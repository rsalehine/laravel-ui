@props(['class'=>''])

<div data-slot="modal-footer"
    {{ $attributes->class([
        'relative',
        'p-(--gutter) pt-[calc(var(--gutter)---spacing(3))',
        $class,
    ]) }}>
    {{ $slot }}
</div>
