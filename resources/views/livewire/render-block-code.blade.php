<figure data-code-snippet role="region" aria-label="codeblock region" class="py-3" wire:key="code-snippet-{{ uniqid() }}" >
    @if ($highlightedCode)
        {!! $highlightedCode !!}
    @else
        <div class="text-gray-500">No code to display</div>
    @endif
</figure>
