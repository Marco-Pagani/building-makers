<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp/htdocs/user/config/site.yaml',
    'modified' => 1591194374,
    'data' => [
        'title' => 'Building Makers',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Sara Gonzalez',
            'email' => 'saragonz@ufl.edu'
        ],
        'taxonomies' => [
            0 => 'pubdate',
            1 => 'audience',
            2 => 'expertise',
            3 => 'subject',
            4 => 'keywords'
        ],
        'metadata' => [
            'description' => 'An online bibliography for maker-related books and websites'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
