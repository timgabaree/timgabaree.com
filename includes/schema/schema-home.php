<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Home Page Structured Data
|--------------------------------------------------------------------------
|
| Builds the Schema.org graph for the Tim Gabaree home page.
|
| The graph is rendered by:
|
| /includes/schema/schema.php
|
*/

require_once __DIR__ .
    '/schema-entities.php';

/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
*/

$websiteSchema =
    buildWebsiteSchema();

/*
|--------------------------------------------------------------------------
| Primary Image
|--------------------------------------------------------------------------
*/

$primaryImageSchema =
    buildPrimaryImageSchema();

/*
|--------------------------------------------------------------------------
| Home Profile Page
|--------------------------------------------------------------------------
*/

$profilePageSchema =
    buildPageSchema(
        'ProfilePage',
        SITE_HOME_URL,
        $pageTitle,
        $metaDescription,
        $pageDatePublished,
        $pageDateModified,
        [
            'primaryImageOfPage' => [
                '@id' =>
                    SITE_PRIMARY_IMAGE_ID,
            ],

            'mainEntity' => [
                '@id' =>
                    SITE_PERSON_ID,
            ],

            'about' => [
                '@id' =>
                    SITE_PERSON_ID,
            ],
        ]
    );

/*
|--------------------------------------------------------------------------
| Person
|--------------------------------------------------------------------------
*/

$personSchema =
    buildPersonSchema();

$personSchema['mainEntityOfPage'] = [
    '@id' =>
        SITE_HOME_URL .
        '#webpage',
];

/*
|--------------------------------------------------------------------------
| Schema Graph
|--------------------------------------------------------------------------
*/

$schemaGraph = [
    $websiteSchema,
    $primaryImageSchema,
    $profilePageSchema,
    $personSchema,
];
