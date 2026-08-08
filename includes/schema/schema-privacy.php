<?php

declare(strict_types=1);

require_once __DIR__ .
    '/schema-entities.php';

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

$personSchema = [
    '@type' =>
        'Person',

    '@id' =>
        SITE_PERSON_ID,

    'name' =>
        SITE_NAME,

    'url' =>
        SITE_HOME_URL,

    'jobTitle' =>
        'Portfolio CIO',

    'email' =>
        'mailto:' .
        SITE_EMAIL,

    'telephone' =>
        SITE_PHONE,

    'sameAs' =>
        SITE_SOCIAL_PROFILES,
];

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