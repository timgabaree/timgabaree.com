<?php

declare(strict_types=1);

require_once __DIR__ . '/schema-entities.php';

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
| About Page Image Data
|--------------------------------------------------------------------------
*/

$aboutImageData =
    getSiteImage(
        'about_family'
    );

$aboutImage =
    $aboutImageData['url'] ??
    '';

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
    '@type' => 'ImageObject',

    '@id' => $aboutImageId,

    'url' => $aboutImage,

    'contentUrl' => $aboutImage,

    'width' => $aboutImageData['width'] ??
        0,

    'height' => $aboutImageData['height'] ??
        0,

    'encodingFormat' => $aboutImageData['type'] ??
        '',

    'caption' => 'Tim Gabaree with his family',

    'representativeOfPage' => true,
];

/*
|--------------------------------------------------------------------------
| About Page
|--------------------------------------------------------------------------
*/

$aboutPageSchema =
    buildPageSchema(
        'ProfilePage',
        SITE_ABOUT_URL,
        $pageTitle,
        $metaDescription,
        $pageDatePublished,
        $pageDateModified,
        [
            'primaryImageOfPage' => [
                '@id' => $aboutImageId,
            ],

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
|
| This page references the same canonical person entity used throughout
| the site rather than creating a separate Tim Gabaree identity.
|
*/

$personSchema =
    buildPersonSchema();

$personSchema['mainEntityOfPage'] = [
    '@id' => SITE_ABOUT_URL .
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
