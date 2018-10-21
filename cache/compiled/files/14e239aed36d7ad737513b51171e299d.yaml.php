<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/rodleviton/Development/kota/user/config/site.yaml',
    'modified' => 1540091148,
    'data' => [
        'title' => 'KOTA',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@example.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
