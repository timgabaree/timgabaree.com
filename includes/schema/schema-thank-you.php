<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Thank-You Page Structured Data
|--------------------------------------------------------------------------
|
| Builds the Schema.org graph for the Tim Gabaree thank-you page.
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
    buildPrimaryImageSchema(
        false
    );

/*
|--------------------------------------------------------------------------
| Thank-You Page
|--------------------------------------------------------------------------
*/

$thankYouPageSchema =
    buildPageSchema(
        'WebPage',
        SITE_THANK_YOU_URL,
        $pageTitle,
        $metaDescription,
        $pageDatePublished,
        $pageDateModified,
        [
            'about' => [
                '@id' => SITE_PERSON_ID,
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

/*
|--------------------------------------------------------------------------
| Schema Graph
|--------------------------------------------------------------------------
*/

$schemaGraph = [
    $websiteSchema,
    $primaryImageSchema,
    $thankYouPageSchema,
    $personSchema,
];
