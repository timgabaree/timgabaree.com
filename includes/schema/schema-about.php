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
    SITE_ABOUT_IMAGE;

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
        SITE_ABOUT_IMAGE_WIDTH,

    'height' =>
        SITE_ABOUT_IMAGE_HEIGHT,

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

$personSchema =
    buildPersonSchema();

$personSchema['spouse'] = [
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
];

$personSchema['affiliation'] = [
    '@type' =>
        'Organization',

    'name' =>
        'RGE Solutions LLC',

    'url' =>
        'https://rgesol.com/',
];

$personSchema['mainEntityOfPage'] = [
    '@id' =>
        SITE_ABOUT_URL .
        '#webpage',
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
