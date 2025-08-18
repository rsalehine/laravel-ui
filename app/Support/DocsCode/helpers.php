<?php

return [
    'button-helper' => [
        'lang' => 'php',
        'name' => 'ButtonHelper.php',
        'code' => <<<'PHP'
<?php

namespace App\Flexiwind;

class ButtonHelper
{
    protected static array $variants = [
        'solid' => [
            'base' => 'btn-solid',
            'intents' => [
                'primary' => 'btn-solid-primary text-white',
                'secondary' => 'btn-solid-secondary text-white',
                'accent' => 'btn-solid-accent text-white',
                'success' => 'btn-solid-success text-white',
                'danger' => 'btn-solid-danger text-white',
                'info' => 'btn-solid-info text-white',
                'warning' => 'btn-solid-warning text-white',
                'neutral'=>'btn-solid-neutral text-bg',
                'gray'=>'btn-solid-gray text-white',
                'white'=>'btn-solid-white border border-border text-fg'
            ],
        ],
        'soft' => [
            'base' => 'btn-soft',
            'intents' => [
                'primary' => 'btn-soft-primary',
                'secondary' => 'btn-soft-secondary',
                'accent' => 'btn-soft-accent',
                'danger' => 'btn-soft-danger',
                'success' => 'btn-soft-success',
                'info' => 'btn-soft-info',
                'warning' => 'btn-soft-warning',
                'gray' => 'btn-soft-gray',
                'neutral' => 'btn-soft-neutral',
            ],
        ],
        'outline' => [
            'base' => 'btn-outline',
            'intents' => [
                'primary' => 'btn-outline-primary',
                'secondary' => 'btn-outline-secondary',
                'accent' => 'btn-outline-accent',
                'danger' => 'btn-outline-danger',
                'info'=>'btn-outline-info',
                'warning'=>'btn-outline-warning',
                'success' => 'btn-outline-success',
                'gray' => 'btn-outline-gray',
                'neutral'=>'btn-outline-neutral'
            ],
        ],
        'ghost' => [
            'base' => 'btn-ghost',
            'intents' => [
                'primary' => 'btn-ghost-primary',
                'secondary' => 'btn-ghost-secondary',
                'accent' => 'btn-ghost-accent',
                'danger' => 'btn-ghost-danger',
                'success' => 'btn-ghost-success',
                'info' => 'btn-ghost-info',
                'warning' => 'btn-ghost-warning',
                'gray' => 'btn-ghost-gray',
                'neutral' => 'btn-ghost-neutral',
            ],
        ],
        'flexi' => [
            'base' => 'btn-flexi',
            'intents' => [
                'primary' => 'btn-flexi-primary text-white',
                'secondary' => 'btn-flexi-secondary text-white',
                'accent' => 'btn-flexi-accent text-white',
                'danger' => 'btn-flexi-danger text-white',
                'success' => 'btn-flexi-success text-white',
                'info' => 'btn-flexi-info text-white',
                'warning' => 'btn-flexi-warning text-white',
                'gray' => 'btn-flexi-gray text-white',
                'neutral' => 'btn-flexi-neutral text-bg',
                'white'=>'btn-flexi-white'
            ],
        ],
        'none' => [
        ],
    ];

    public static function getVariants()
    {
        return self::$variants;
    }
}
PHP
    ],
    'ui-helper' => [
        'lang' => 'php',
        'name' => 'UiHelper.php',
        'code' => <<<'PHP'
<?php

namespace App\Flexiwind;

class UiHelper
{
    protected static array $variants = [
        'none' => [],
        'solid' => [
            'base' => 'ui-solid',
            'intent' => [
                'primary' => 'ui-solid-primary',
                'secondary' => 'ui-solid-secondary',
                'success' => 'ui-solid-success',
                'danger' => 'ui-solid-danger',
                'warning' => 'ui-solid-warning',
                'info' => 'ui-solid-info',
                'gray' => 'ui-solid-gray',
                'neutral'=>'ui-solid-neutral'
            ],
        ],
        'soft' => [
            'base' => 'ui-soft',
            'intent' => [
                'primary' => 'ui-soft-primary',
                'secondary' => 'ui-soft-secondary',
                'accent'=>'ui-soft-accent',
                'success' => 'ui-soft-success',
                'danger' => 'ui-soft-danger',
                'warning' => 'ui-soft-warning',
                'info' => 'ui-soft-info',
                'gray' => 'ui-soft-gray',
                'neutral' => 'ui-soft-neutral'
            ],
        ],
        'subtle' => [
            'base' => 'ui-subtle',
            'intent' => [
                'primary' => 'ui-subtle-primary',
                'secondary' => 'ui-subtle-secondary',
                'success' => 'ui-subtle-success',
                'danger' => 'ui-subtle-danger',
                'accent'=>'ui-subtle-accent',
                'warning' => 'ui-subtle-warning',
                'info' => 'ui-subtle-info',
                'gray' => 'ui-subtle-gray',
                'neutral' => 'ui-subtle-neutral'
            ],
        ],
        'outline' => [
            'base' => 'ui-outline',
            'intent' => [
                'primary' => 'ui-outline-primary',
                'secondary' => 'ui-outline-secondary',
                'success' => 'ui-outline-success',
                'danger' => 'ui-outline-danger',
                'warning' => 'ui-outline-warning',
                'info' => 'ui-outline-info',
                'gray' => 'ui-outline-gray',
                'neutral' => 'ui-outline-neutral'
            ],
        ],
    ];

    protected static array $all_radius = [
        'none' => '',
        'xs' => 'rounded-xs',
        'sm' => 'rounded-sm',
        'md' => 'rounded-md',
        'lg' => 'rounded-lg',
        'xl' => 'rounded-xl',
        '2xl' => 'rounded-2xl',
        '3xl' => 'rounded-3xl',
        'circle' => 'rounded-full'
    ];

    protected static array $all_card_radius = [
        'none'  => '[--card-radius:var(--ui-radius,0px)]',
        'xs'    => '[--card-radius:var(--ui-radius,var(--radius-xs))]',
        'sm'    => '[--card-radius:var(--ui-radius,var(--radius-sm))]',
        'md'    => '[--card-radius:var(--ui-radius,var(--radius-md))]',
        'lg'    => '[--card-radius:var(--ui-radius,var(--radius-lg))]',
        'xl'    => '[--card-radius:var(--ui-radius,var(--radius-xl))]',
        '2xl'   => '[--card-radius:var(--ui-radius,var(--radius-2xl))]',
        '3xl'   => '[--card-radius:var(--ui-radius,var(--radius-3xl))]',
        'circle' => '[--card-radius:var(--ui-radius,var(--radius-circle))]',
    ];

    public static function getVariants()
    {
        return self::$variants;
    }

    public static function getCardRadius(string $radius = 'md')
    {
        return self::$all_card_radius[$radius] ?? self::$all_card_radius['md'];
    }

    public static function getRadius(string $radius = 'md')
    {
        return self::$all_radius[$radius] ?? self::$all_radius['md'];
    }

    public static function getClasses(string $variant = 'solid', ?string $intent = 'gray'): string
    {
        $variantConfig = self::$variants[$variant] ?? [];
        $base = $variantConfig['base'] ?? '';
        $intentClass = $variantConfig['intent'][$intent] ?? '';
        return trim("$base $intentClass");
    }
}
PHP
    ]
];
