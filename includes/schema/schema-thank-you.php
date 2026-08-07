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

/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
*/

$websiteSchema = [
    '@type' =>
        'WebSite',

    '@id' =>
        SITE_WEBSITE_ID,

    'url' =>
        SITE_HOME_URL,

    'name' =>
        SITE_NAME,

    'description' =>
        SITE_DESCRIPTION,

    'inLanguage' =>
        SITE_LANGUAGE,
];

/*
|--------------------------------------------------------------------------
| Primary Image
|--------------------------------------------------------------------------
*/

$primaryImageSchema = [
    '@type' =>
        'ImageObject',

    '@id' =>
        SITE_PRIMARY_IMAGE_ID,

    'url' =>
        SITE_PRIMARY_IMAGE,

    'contentUrl' =>
        SITE_PRIMARY_IMAGE,

    'width' =>
        SITE_PRIMARY_IMAGE_WIDTH,

    'height' =>
        SITE_PRIMARY_IMAGE_HEIGHT,

    'encodingFormat' =>
        'image/webp',

    'caption' =>
        'Tim Gabaree, Portfolio CIO and technology executive',
];

/*
|--------------------------------------------------------------------------
| Thank-You Page
|--------------------------------------------------------------------------
*/

$thankYouPageSchema = [
    '@type' =>
        'WebPage',

    '@id' =>
        SITE_THANK_YOU_URL .
        '#webpage',

    'url' =>
        SITE_THANK_YOU_URL,

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

    'givenName' =>
        'Tim',

    'familyName' =>
        'Gabaree',

    'url' =>
        SITE_HOME_URL,

    'image' => [
        '@id' =>
            SITE_PRIMARY_IMAGE_ID,
    ],

    'jobTitle' =>
        'Portfolio CIO',

    'description' =>
        'Portfolio CIO and technology executive focused on technology value creation, governance, operating model transformation, and enterprise performance.',

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
    $primaryImageSchema,
    $thankYouPageSchema,
    $personSchema,
];