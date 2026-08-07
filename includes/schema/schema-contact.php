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

    'representativeOfPage' =>
        true,
];

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

    'affiliation' => [
        '@type' =>
            'Organization',

        'name' =>
            'RGE Solutions LLC',

        'url' =>
            'https://rgesol.com/',
    ],

    'mainEntityOfPage' => [
        '@id' =>
            SITE_CONTACT_URL .
            '#webpage',
    ],
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
        'English',
    ],
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