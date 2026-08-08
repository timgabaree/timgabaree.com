<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Shared Schema Entities
|--------------------------------------------------------------------------
|
| Provides canonical Schema.org entities reused across public pages.
|
| bootstrap.php must already be loaded by the calling page.
|
*/

/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
*/

function buildWebsiteSchema(): array
{
    return [
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
}

/*
|--------------------------------------------------------------------------
| Primary Image
|--------------------------------------------------------------------------
*/

function buildPrimaryImageSchema(
    bool $representativeOfPage = true
): array {
    $schema = [
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

    if ($representativeOfPage) {
        $schema['representativeOfPage'] =
            true;
    }

    return $schema;
}

/*
|--------------------------------------------------------------------------
| Person
|--------------------------------------------------------------------------
*/

function buildPersonSchema(): array
{
    return [
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
}