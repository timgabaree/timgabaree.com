<?php

declare(strict_types=1);

require_once __DIR__ . '/schema-entities.php';

/*
|--------------------------------------------------------------------------
| Technology Governance Page Structured Data
|--------------------------------------------------------------------------
|
| Builds the Schema.org graph for the Technology Governance page.
|
| The graph is rendered by:
|
| /includes/schema/schema.php
|
*/

/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
*/

$websiteSchema =
    buildWebsiteSchema();

/*
|--------------------------------------------------------------------------
| Web Page
|--------------------------------------------------------------------------
*/

$pageSchema =
    buildPageSchema(
        'WebPage',
        SITE_GOVERNANCE_URL,
        $pageTitle,
        $metaDescription,
        $pageDatePublished,
        $pageDateModified,
        [
            'mainEntity' => [
                '@id' => SITE_PERSON_ID,
            ],

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
    $pageSchema,
    $personSchema,
];
