<?php

declare(strict_types=1);

require_once __DIR__ .
    '/schema-entities.php';

/*
|--------------------------------------------------------------------------
| About Page Structured Data
|--------------------------------------------------------------------------
|
| Builds the Schema.org graph for the Tim Gabaree About page.
|
| The graph is rendered by:
|
| /includes/schema/schema.php
|
*/

/*
|--------------------------------------------------------------------------
| About Page Image
|--------------------------------------------------------------------------
*/

$aboutImage =
    SITE_URL .
    '/media/about-gabaree-family-800x600.webp';

$aboutImageId =
    SITE_ABOUT_URL .
    '#primaryimage';

/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
*/

$websiteSchema =
    buildWebsiteSchema();

/*
|--------------------------------------------------------------------------
| About Page Image
|--------------------------------------------------------------------------
*/

$aboutImageSchema = [
    '@type' =>
        'ImageObject',

    '@id' =>
        $aboutImageId,

    'url' =>
        $aboutImage,

    'contentUrl' =>
        $aboutImage,

    'width' =>
        800,

    'height' =>
        600,

    'encodingFormat' =>
        'image/webp',

    'caption' =>
        'Tim Gabaree with his family',

    'representativeOfPage' =>
        true,
];

/*
|--------------------------------------------------------------------------
| About Page
|--------------------------------------------------------------------------
*/

$aboutPageSchema = [
    '@type' =>
        'ProfilePage',

    '@id' =>
        SITE_ABOUT_URL .
        '#webpage',

    'url' =>
        SITE_ABOUT_URL,

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
            $aboutImageId,
    ],

    'mainEntity' => [
        '@id' =>
            SITE_PERSON_ID,
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
|
| This page references the same canonical person entity used throughout
| the site rather than creating a separate Tim Gabaree identity.
|
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

    'spouse' => [
        '@type' =>
            'Person',

        '@id' =>
            'https://carriegabaree.com/#person',

        'name' =>
            'Carrie Gabaree',

        'url' =>
            'https://carriegabaree.com/',

        'sameAs' => [
            'https://www.linkedin.com/in/carriegabaree',
        ],
    ],

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
            SITE_ABOUT_URL .
            '#webpage',
    ],
];

/*
|--------------------------------------------------------------------------
| Schema Graph
|--------------------------------------------------------------------------
*/

$schemaGraph = [
    $websiteSchema,
    $aboutImageSchema,
    $aboutPageSchema,
    $personSchema,
];