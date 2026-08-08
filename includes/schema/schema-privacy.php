<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Privacy Page Structured Data
|--------------------------------------------------------------------------
|
| Builds the Schema.org graph for the Tim Gabaree privacy page.
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
| Privacy Page
|--------------------------------------------------------------------------
*/

$privacyPageSchema = [
    '@type' =>
        'WebPage',

    '@id' =>
        SITE_PRIVACY_URL .
        '#webpage',

    'url' =>
        SITE_PRIVACY_URL,

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
];

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
    $privacyPageSchema,
    $personSchema,
];