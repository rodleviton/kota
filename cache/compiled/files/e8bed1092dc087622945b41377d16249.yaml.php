<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/rodleviton/Development/kota/user/themes/kota/blueprints.yaml',
    'modified' => 1540017070,
    'data' => [
        'name' => 'Kota',
        'version' => '0.1.0',
        'description' => 'kota default theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Boxed Orange',
            'email' => 'hello@boxedorange.com'
        ],
        'homepage' => 'https://github.com/boxed-orange/grav-theme-kota',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/boxed-orange/grav-theme-kota/issues',
        'readme' => 'https://github.com/boxed-orange/grav-theme-kota/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
