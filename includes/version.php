<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Site and Framework Versioning
|--------------------------------------------------------------------------
|
| Central source of truth for:
|
| - framework versions;
| - site releases;
| - asset cache-busting;
| - public-page publication dates;
| - public-page modification dates.
|
| Framework and site releases use semantic versioning.
|
| Asset versions use:
|
| YYYYMMDD.NN
|
| Example:
|
| 20260807.01
|
| Increment NN when the same asset category changes more than once on
| the same day.
|
| Update a page's modified date only after a meaningful change to that
| page's content, structure, metadata, or structured data.
|
*/

/*
|--------------------------------------------------------------------------
| Framework Version
|--------------------------------------------------------------------------
*/

const FRAMEWORK_NAME =
    'Tim Gabaree Website Framework';

const FRAMEWORK_VERSION =
    '1.0.0';

const FRAMEWORK_BUILD_DATE =
    '2026-08-07';

/*
|--------------------------------------------------------------------------
| Site Version
|--------------------------------------------------------------------------
*/

const SITE_VERSION =
    '1.0.0';

const SITE_RELEASE_DATE =
    '2026-08-07';

/*
|--------------------------------------------------------------------------
| Stylesheets
|--------------------------------------------------------------------------
*/

const VERSION_CSS =
    '20260807.01';

/*
|--------------------------------------------------------------------------
| JavaScript
|--------------------------------------------------------------------------
*/

const VERSION_JS =
    '20260807.01';

/*
|--------------------------------------------------------------------------
| Images
|--------------------------------------------------------------------------
*/

const VERSION_IMAGES =
    '20260807.01';

/*
|--------------------------------------------------------------------------
| Favicons
|--------------------------------------------------------------------------
*/

const VERSION_FAVICONS =
    '20260712.01';

/*
|--------------------------------------------------------------------------
| Downloadable Documents
|--------------------------------------------------------------------------
*/

const VERSION_DOCUMENTS =
    '20260807.01';

/*
|--------------------------------------------------------------------------
| Contact Card
|--------------------------------------------------------------------------
*/

const VERSION_VCARD =
    '20260807.01';

/*
|--------------------------------------------------------------------------
| Structured Data
|--------------------------------------------------------------------------
*/

const VERSION_SCHEMA =
    '20260807.01';

/*
|--------------------------------------------------------------------------
| Sitemap
|--------------------------------------------------------------------------
*/

const VERSION_SITEMAP =
    '20260807.01';

/*
|--------------------------------------------------------------------------
| Public Page Metadata
|--------------------------------------------------------------------------
|
| The array key must match the page identifier assigned near the top of
| each public PHP page.
|
| Publication dates should normally remain unchanged.
|
| Modification dates should be updated only after a meaningful
| public-facing content, structural, metadata, or structured-data change.
|
*/

const PAGE_METADATA = [
    'home' => [
        'published' =>
            '2026-08-07',

        'modified' =>
            '2026-08-07',
    ],

    'about' => [
        'published' =>
            '2026-08-07',

        'modified' =>
            '2026-08-07',
    ],

    'contact' => [
        'published' =>
            '2026-08-07',

        'modified' =>
            '2026-08-07',
    ],

    'privacy' => [
        'published' =>
            '2026-08-07',

        'modified' =>
            '2026-08-07',
    ],

    'thank-you' => [
        'published' =>
            '2026-08-07',

        'modified' =>
            '2026-08-07',
    ],

    'error-403' => [
        'published' =>
            '2026-08-07',

        'modified' =>
            '2026-08-07',
    ],

    'error-404' => [
        'published' =>
            '2026-08-07',

        'modified' =>
            '2026-08-07',
    ],

    'error-500' => [
        'published' =>
            '2026-08-07',

        'modified' =>
            '2026-08-07',
    ],
];