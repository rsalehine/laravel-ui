<?php


return [
    'theme-dark' => [
        'lang' => 'css',
        'name' => 'dark',
        'code' => <<<'CSS'
@theme inline {
    --color-primary: var(--color-primary-500);
    --color-secondary: var(--color-secondary-500);
    --color-accent: var(--color-accent-500);
    --color-info: var(--color-info-500);
    --color-warning: var(--color-warning-500);
    --color-danger: var(--color-danger-500);
    --color-success: var(--color-success-500);


    /* background colors  */
    --color-bg: var(--color-gray-950); 
    --color-bg-subtle: var(--color-900); 
    --color-bg-surface: var(--color-950); 
    --color-bg-muted: var(--color-800); 
    --color-bg-surface-elevated: var(--color-700); 


    /* foreground colors  */
    --color-fg: var(--color-gray-300); 
    --color-fg-muted: var(--color-gray-400); 
    --color-fg-subtitle: var(--color-gray-100); 
    --color-fg-title: var(--color-white); 


    /* border colors  */
    --color-border: var(--color-gray-900); 
    --color-border-subtle: var(--color-gray-950); 
    --color-border-strong: var(--color-gray-800); 
    --color-border-amphasis: var(--color-gray-700); 
    --color-border-input: var(--color-gray-900);


    /* card  */
    --color-card: var(--color-gray-950); 
    --color-card-gray: var(--color-gray-900); 


    /* popover : For Dropdowns & popovers  */
    --color-popover: var(--color-gray-950); 
    --color-popover-gray: var(--color-gray-900);



    /* define primary colors */
    --color-primary-50: hsl(252, 100%, 97%);
    --color-primary-100: hsl(252, 100%, 94%);
    --color-primary-200: hsl(251, 98%, 89%);
    --color-primary-300: hsl(249, 95%, 82%);
    --color-primary-400: hsl(247, 90%, 74%);
    --color-primary-500: hsl(245, 86%, 67%);
    --color-primary-600: hsl(243, 75%, 59%);
    --color-primary-700: hsl(244, 57%, 51%);
    --color-primary-800: hsl(245, 54%, 41%);
    --color-primary-900: hsl(245, 47%, 35%);
    --color-primary-950: hsl(246, 47%, 20%);

    --color-secondary-50: hsl(183, 100%, 96%);
    --color-secondary-100: hsl(185, 96%, 90%);
    --color-secondary-200: hsl(186, 93%, 82%);
    --color-secondary-300: hsl(187, 92%, 69%);
    --color-secondary-400: hsl(188, 86%, 53%);
    --color-secondary-500: hsl(187, 97%, 43%);
    --color-secondary-600: hsl(187, 92%, 36%);
    --color-secondary-700: hsl(188, 78%, 31%);
    --color-secondary-800: hsl(201, 90%, 27%);
    --color-secondary-900: hsl(190, 56%, 24%);
    --color-secondary-950: hsl(192, 79%, 15%);

    /* other colors if needed */
}    
CSS,
    ],
];
