<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:8000',
    'title' => 'North Wirral Round Table',
    'description' => 'North Wirral Round Table is the local branch of the National Round Table, which is the largest voluntary organisation for young men in Great Britain and Ireland.',
    'links' => [
        'about' => '/about',
        'join' => '/join-us',
        'funding' => '/apply-for-funding',
        'santa' => '/santa-sleigh',
        'contact' => '/contact',
        'donate' => '/donate',
    ],
    'active' => function ($page, $path) {
        return $page->getPath() == $path ? 'active' : '';
    },
    'showSantaRoutes' => false,
    'collections' => [
        'santaRoutes' => [
        ],
        'redirects' => [
            'path' => 'to/{filename}'
        ],
    ],
];
