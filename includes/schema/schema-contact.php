<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Contact Page Structured Data
|--------------------------------------------------------------------------
|
| Builds the Schema.org graph for the Tim Gabaree contact page.
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
| Contact Page
|--------------------------------------------------------------------------
*/

$contactPageSchema = [
    '@type' =>
        'ContactPage',

    '@id' =>
        SITE_CONTACT_URL .
        '#webpage',

    'url' =>
        SITE_CONTACT_URL,

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

    'primaryImageOfPage' => [
        '@id' =>
            SITE_PRIMARY_IMAGE_ID,
    ],

    'about' => [
        '@id' =>
            SITE_PERSON_ID,
    ],

    'mainEntity' => [
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

$personSchema['mainEntityOfPage'] = [
    '@id' =>
        SITE_CONTACT_URL .
        '#webpage',
];

/*
|--------------------------------------------------------------------------
| Contact Point
|--------------------------------------------------------------------------
*/

$contactPointSchema = [
    '@type' =>
        'ContactPoint',

    '@id' =>
        SITE_CONTACT_URL .
        '#contactpoint',

    'contactType' =>
        'professional inquiries',

    'email' =>
        SITE_EMAIL,

    'telephone' =>
        SITE_PHONE,

    'url' =>
        SITE_CONTACT_URL,

    'availableLanguage' => [
        'en',
    ],
];

/*
|--------------------------------------------------------------------------
| Person Contact Point
|--------------------------------------------------------------------------
*/

$personSchema['contactPoint'] = [
    '@id' =>
        SITE_CONTACT_URL .
        '#contactpoint',
];

/*
|--------------------------------------------------------------------------
| Schema Graph
|--------------------------------------------------------------------------
*/

$schemaGraph = [
    $websiteSchema,
    $primaryImageSchema,
    $contactPageSchema,
    $personSchema,
    $contactPointSchema,
];