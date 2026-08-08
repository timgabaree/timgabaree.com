<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Error Page Structured Data
|--------------------------------------------------------------------------
|
| Builds minimal Schema.org structured data for shared error pages.
|
| Error pages are intentionally marked noindex, but the structured data
| keeps the document relationship to the website and person consistent
| with the rest of timgabaree.com.
|
*/

/*
|--------------------------------------------------------------------------
| Error Page
|--------------------------------------------------------------------------
*/

$errorPageSchema = [
    '@type' =>
        'WebPage',

    '@id' =>
        $canonicalUrl .
        '#webpage',

    'url' =>
        $canonicalUrl,

    'name' =>
        $pageTitle,

    'description' =>
        $metaDescription,

    'inLanguage' =>
        SITE_LANGUAGE,

    'datePublished' =>
        $pageDatePublished,

    'dateModified' =>
        $pageDateModified,

    'isPartOf' => [
        '@id' =>
            SITE_WEBSITE_ID,
    ],

    'about' => [
        '@id' =>
            SITE_PERSON_ID,
    ],

    'breadcrumb' => [
        '@id' =>
            $canonicalUrl .
            '#breadcrumb',
    ],
];

/*
|--------------------------------------------------------------------------
| Breadcrumb
|--------------------------------------------------------------------------
*/

$errorBreadcrumbSchema = [
    '@type' =>
        'BreadcrumbList',

    '@id' =>
        $canonicalUrl .
        '#breadcrumb',

    'itemListElement' => [
        [
            '@type' =>
                'ListItem',

            'position' =>
                1,

            'name' =>
                'Home',

            'item' =>
                SITE_HOME_URL,
        ],

        [
            '@type' =>
                'ListItem',

            'position' =>
                2,

            'name' =>
                $errorTitle,

            'item' =>
                $canonicalUrl,
        ],
    ],
];

/*
|--------------------------------------------------------------------------
| Schema Graph
|--------------------------------------------------------------------------
*/

$schemaGraph = [
    $errorPageSchema,
    $errorBreadcrumbSchema,
];