
@props([
    'noBorderRadiusTop' => false,
])

@php
    $contents ??= $slot->toHtml();
@endphp

<div
   
    data-code-component
    class="relative group overflow-hidden max-h-full w-full grid
        {{ $noBorderRadiusTop ? 'rounded-t-0' : 'my-4 first:mt-0 last:mb-0' }}"
>
    <figure
        role="region"
        aria-label="codeblock region"
        data-hidden-scrollbar-s
        data-overlayscrollbars-initialize
        class="w-full flex h-full overflow-auto"
    >
         {{$slot}}
    </figure>
</div>

