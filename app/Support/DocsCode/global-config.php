<?php

return [
    'global-config' => [
        'lang' => 'css',
        'name' => 'config.css',
        'code' => <<<'CSS'
:root{
    --bg: var(--color-white);
    --bg-surface: var(--color-gray-50);
    --bg-subtle: var(--color-gray-100);
    --bg-muted: var(--color-gray-200);
    --bg-surface-elevated: var(--color-gray-300);
    --fg: var(--color-gray-700);
    --fg-subtext: var(--color-gray-600);
    --fg-title: var(--color-gray-900);
    --fg-subtitle: var(--color-gray-800);
    --border: var(--color-gray-200);
    --border-subtleer: var(--color-gray-50);
    --border-subtle: var(--color-gray-200);
    --border-strong: var(--color-gray-300);
    --border-amphasis: var(--color-gray-400);
}
CSS
    ],
];
