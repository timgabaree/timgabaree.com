<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Sitemap Configuration
|--------------------------------------------------------------------------
|
| Defines the public pages included in sitemap.xml and the managed
| SITE_IMAGES entries associated with each page.
|
| Canonical page URLs and modification dates are provided centrally by
| PAGE_CONFIG. Image paths are provided centrally by SITE_IMAGES.
|
*/

const SITEMAP_PAGES = [
    'home' => [
        'images' => [
            'profile',
            'profile_hover',
            'background',
            'results_left',
            'results_middle',
            'results_right',
            'expertise',
            'education_uis_background',
            'education_uis_logo',
            'education_purdue_background',
            'education_purdue_logo',
            'qr_code',
        ],
    ],

    'about' => [
        'images' => [
            'about_family',
            'about_liberty_family',
            'about_ellis_island',
            'about_mount_vernon',
            'interest_coffee',
            'interest_chocolate',
            'interest_pizza',
            'interest_technology',
            'qr_code',
            'background',
        ],
    ],

    'contact' => [
        'images' => [
            'profile',
            'qr_code',
            'background',
        ],
    ],

    'privacy' => [
        'images' => [
            'background',
        ],
    ],
];
