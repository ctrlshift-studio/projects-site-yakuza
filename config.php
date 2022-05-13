<?php

return [
    'production' => false,
    'baseUrl' => 'https://www.yakuzasando.com',
    'site' => [
        'title' => 'YAKUZA KATSU SANDO & COFFEE',
        'description' => 'YAKUZA KATSU SANDO & COFFEE',
    ],
    'owner' => [
        'name' => 'Yakuza Sando',
    ],
    'services' => [
        'cmsVersion' => '~2.10',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => '',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => '',
            'apiKey' => '',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
 