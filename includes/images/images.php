<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Site Image Registry
|--------------------------------------------------------------------------
|
| Central source of truth for managed site images.
|
| Add, remove, rename, or update important site images here.
|
| Image definitions are shared across HTML rendering, metadata,
| structured data, preload logic, and sitemap generation.
|
| The optional roles array is reserved for behavior that requires explicit
| authorization. Currently, the sitemap role approves an image for sitemap
| inclusion.
|
*/

const SITE_IMAGES = [

/*
|--------------------------------------------------------------------------
| Primary Profile Image
|--------------------------------------------------------------------------
*/

    'profile' => [
        'path' =>
            '/media/profile-pic-tim-gabaree-900x1200.webp',

        'width' =>
            900,

        'height' =>
            1200,

        'alt' =>
            'Tim Gabaree',

        'loading' =>
            'eager',

        'fetchpriority' =>
            'high',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Social Icon — Blogger
|--------------------------------------------------------------------------
*/

    'social_blogger' => [
        'path' =>
            '/media/social-media-blogger-icon-50x50.webp',

        'width' =>
            50,

        'height' =>
            50,

        'alt' =>
            '',
    ],

/*
|--------------------------------------------------------------------------
| Social Icon — LinkedIn
|--------------------------------------------------------------------------
*/

    'social_linkedin' => [
        'path' =>
            '/media/social-media-linkedin-icon-50x50.webp',

        'width' =>
            50,

        'height' =>
            50,

        'alt' =>
            '',
    ],

/*
|--------------------------------------------------------------------------
| Social Icon — GitHub
|--------------------------------------------------------------------------
*/

    'social_github' => [
        'path' =>
            '/media/social-media-github-icon-50x50.webp',

        'width' =>
            50,

        'height' =>
            50,

        'alt' =>
            '',
    ],

/*
|--------------------------------------------------------------------------
| Home Hover Profile Image
|--------------------------------------------------------------------------
*/

    'profile_hover' => [
        'path' =>
            '/media/profile-pic-tim-gabaree-in-the-morning-400x534.webp',

        'width' =>
            400,

        'height' =>
            534,

        'alt' =>
            '',

        'loading' =>
            'eager',

        'fetchpriority' =>
            'high',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Results Background — Left
|--------------------------------------------------------------------------
*/

    'results_left' => [
        'path' =>
            '/media/results-background-left-850x1050.webp',

        'width' =>
            850,

        'height' =>
            1050,

        'alt' =>
            '',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Results Background — Middle
|--------------------------------------------------------------------------
*/

    'results_middle' => [
        'path' =>
            '/media/results-background-middle-850x1050.webp',

        'width' =>
            850,

        'height' =>
            1050,

        'alt' =>
            '',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Results Background — Right
|--------------------------------------------------------------------------
*/

    'results_right' => [
        'path' =>
            '/media/results-background-right-850x1050.webp',

        'width' =>
            850,

        'height' =>
            1050,

        'alt' =>
            '',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Expertise Background
|--------------------------------------------------------------------------
*/

    'expertise' => [
        'path' =>
            '/media/expertise-background-650x752.webp',

        'width' =>
            650,

        'height' =>
            752,

        'alt' =>
            '',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Education — Background Image — University of Illinois Springfield
|--------------------------------------------------------------------------
*/

    'education_uis_background' => [
        'path' =>
            '/media/education-background-university-of-illinois-springfield-1200x313.webp',

        'width' =>
            1200,

        'height' =>
            313,

        'alt' =>
            '',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Education Logo — University of Illinois Springfield
|--------------------------------------------------------------------------
*/

    'education_uis_logo' => [
        'path' =>
            '/media/education-logo-university-of-illinois-springfield-500x250.webp',

        'width' =>
            500,

        'height' =>
            250,

        'alt' =>
            'University of Illinois Springfield',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Education — Background Image — Purdue University Global
|--------------------------------------------------------------------------
*/

    'education_purdue_background' => [
        'path' =>
            '/media/education-background-purdue-university-global-1200x444.webp',

        'width' =>
            1200,

        'height' =>
            444,

        'alt' =>
            '',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Education Logo — Purdue University Global
|--------------------------------------------------------------------------
*/

    'education_purdue_logo' => [
        'path' =>
            '/media/education-logo-purdue-university-global-500x137.webp',

        'width' =>
            500,

        'height' =>
            137,

        'alt' =>
            'Purdue University Global',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Personal Interest — Coffee Roasting
|--------------------------------------------------------------------------
*/

    'interest_coffee' => [
        'path' =>
            '/media/interests-and-hobbies-roasted-beans-and-espresso800x602.webp',

        'width' =>
            800,

        'height' =>
            602,

        'alt' =>
            '',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Personal Interest — Baking and Chocolatiering
|--------------------------------------------------------------------------
*/

    'interest_chocolate' => [
        'path' =>
            '/media/interests-and-hobbies-chocolate-babka-800x602.webp',

        'width' =>
            800,

        'height' =>
            602,

        'alt' =>
            '',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Personal Interest — Pizza Making
|--------------------------------------------------------------------------
*/

    'interest_pizza' => [
        'path' =>
            '/media/interests-and-hobbies-neapolitan-pizza-800x602.webp',

        'width' =>
            800,

        'height' =>
            602,

        'alt' =>
            '',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Personal Interest — AI and Emerging Technology
|--------------------------------------------------------------------------
*/

    'interest_technology' => [
        'path' =>
            '/media/profile-pic-tim-gabaree-geeking-out-800x533.webp',

        'width' =>
            800,

        'height' =>
            533,

        'alt' =>
            '',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| About Family Image
|--------------------------------------------------------------------------
*/

    'about_family' => [
        'path' =>
            '/media/about-gabaree-family-800x600.webp',

        'width' =>
            800,

        'height' =>
            600,

        'alt' =>
            'Tim Gabaree with Carrie, Clint, and Finn in Halloween costumes',

        'loading' =>
            'eager',

        'fetchpriority' =>
            'high',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Architecture Background
|--------------------------------------------------------------------------
*/

    'background' => [
        'path' =>
            '/media/background-pic-architecture-1920x942.webp',

        'width' =>
            1920,

        'height' =>
            942,

        'alt' =>
            '',

        'loading' =>
            'eager',

        'fetchpriority' =>
            'high',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| About Gallery — Statue of Liberty
|--------------------------------------------------------------------------
*/

    'about_liberty_family' => [
        'path' =>
            '/media/about-lady-liberty-finn-clint-carrie-tim-800x1067.webp',

        'width' =>
            800,

        'height' =>
            1067,

        'alt' =>
            'Tim Gabaree with Carrie, Clint, and Finn at the Statue of Liberty',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| About Gallery — Ellis Island
|--------------------------------------------------------------------------
*/

    'about_ellis_island' => [
        'path' =>
            '/media/about-finn-clint-working-hard-message-800x486.webp',

        'width' =>
            800,

        'height' =>
            486,

        'alt' =>
            'Clint and Finn viewing an exhibit about hard work at Ellis Island',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| About Gallery — Mount Vernon
|--------------------------------------------------------------------------
*/

    'about_mount_vernon' => [
        'path' =>
            '/media/about-gabaree-family-mt-vernon-800x600.webp',

        'width' =>
            800,

        'height' =>
            600,

        'alt' =>
            'Tim Gabaree with Carrie, Clint, and Finn at Mount Vernon',

        'roles' => [
            'sitemap',
        ],
    ],

/*
|--------------------------------------------------------------------------
| Contact QR Code
|--------------------------------------------------------------------------
*/

    'qr_code' => [
        'path' =>
            '/media/qr-code-tim-gabaree-500x500.webp',

        'width' =>
            500,

        'height' =>
            500,

        'alt' =>
            'QR code to Tim Gabaree’s contact page',

        'roles' => [
            'sitemap',
        ],
    ],
];
