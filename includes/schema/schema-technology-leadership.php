<?php

declare(strict_types=1);

require_once __DIR__ . '/schema-entities.php';

/*
|--------------------------------------------------------------------------
| Technology Leadership Page Structured Data
|--------------------------------------------------------------------------
|
| Builds the Schema.org graph for the Enterprise Technology Leadership
| page.
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
        SITE_TECHNOLOGY_LEADERSHIP_URL,
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
