<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:8000',
    'title' => 'Hoylake and West Kirby Round Table',
    'description' => 'Hoylake and West Kirby (HaWK) Round Table is the local branch of the National Round Table, which is the largest voluntary organisation for young men in Great Britain and Ireland.',
    'links' => [
        'about' => '/about',
        'join' => '/join-us',
        'funding' => '/apply-for-funding',
        'santa' => '/santa-sleigh',
        'contact' => '/contact',
    ],
    'active' => function ($page, $path) {
        return $page->getPath() == $path ? 'active' : '';
    },
    'collections' => [
        'santaRoutes' => [
            'path' => 'santaRoutes',
        ]
    ],
];
