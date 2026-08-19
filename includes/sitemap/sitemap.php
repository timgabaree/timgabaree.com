<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Sitemap Image Configuration
|--------------------------------------------------------------------------
|
| Defines the managed SITE_IMAGES entries associated with indexable
| public pages.
|
| Sitemap page inclusion, canonical URLs, and modification dates are
| derived centrally from PAGE_CONFIG.
|
| Image paths and sitemap authorization are provided by SITE_IMAGES.
|
*/

const SITEMAP_IMAGES = [
    'home' => [
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

    'about' => [
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

    'contact' => [
        'profile',
        'qr_code',
        'background',
    ],

    'privacy' => [
        'background',
    ],
];
