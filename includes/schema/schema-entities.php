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
        '@type' => 'WebSite',

        '@id' => SITE_WEBSITE_ID,

        'url' => SITE_HOME_URL,

        'name' => SITE_NAME,

        'description' => SITE_DESCRIPTION,

        'inLanguage' => SITE_LANGUAGE,
    ];
}

/*
|--------------------------------------------------------------------------
| Page
|--------------------------------------------------------------------------
|
| Build the shared Schema.org properties used by public page entities.
|
| Page-specific schema properties may be supplied through $additional.
|
*/

function buildPageSchema(
    string $type,
    string $url,
    string $name,
    string $description,
    string $datePublished,
    string $dateModified,
    array $additional = []
): array {
    $schema = [
        '@type' => $type,

        '@id' => $url .
            '#webpage',

        'url' => $url,

        'name' => $name,

        'description' => $description,

        'inLanguage' => SITE_LANGUAGE,

        'datePublished' => $datePublished,

        'dateModified' => $dateModified,

        'isPartOf' => [
            '@id' => SITE_WEBSITE_ID,
        ],
    ];

    return array_merge(
        $schema,
        $additional
    );
}

/*
|--------------------------------------------------------------------------
| Primary Image
|--------------------------------------------------------------------------
*/

function buildPrimaryImageSchema(
    bool $representativeOfPage = true
): array {

    $image =
        getSiteImage(
            'profile'
        );

    $schema = [
        '@type' => 'ImageObject',

        '@id' => SITE_PRIMARY_IMAGE_ID,

        'url' => $image['url'] ??
            '',

        'contentUrl' => $image['url'] ??
            '',

        'width' => $image['width'] ??
            0,

        'height' => $image['height'] ??
            0,

        'encodingFormat' => $image['type'] ??
            '',

        'caption' => 'Tim Gabaree, CIO and technology executive',
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
        '@type' => 'Person',

        '@id' => SITE_PERSON_ID,

        'name' => SITE_NAME,

        'givenName' => 'Tim',

        'familyName' => 'Gabaree',

        'url' => SITE_HOME_URL,

        'image' => [
            '@id' => SITE_PRIMARY_IMAGE_ID,
        ],

        'jobTitle' => 'CIO and Technology Executive',

        'description' =>
            'CIO and technology executive focused on AI strategy and enablement, cybersecurity, enterprise technology, infrastructure and operations, and technology value creation.',

        'email' => 'mailto:' .
            SITE_EMAIL,

        'telephone' => SITE_PHONE,

        'sameAs' => SITE_SOCIAL_PROFILES,

        'spouse' => [
            '@type' => 'Person',

            '@id' => 'https://carriegabaree.com/#person',

            'name' => 'Carrie Gabaree',

            'url' => 'https://carriegabaree.com/',

            'sameAs' => [
                'https://www.linkedin.com/in/carriegabaree',
            ],
        ],

        'affiliation' => [
            '@type' => 'Organization',

            'name' => 'RGE Solutions LLC',

            'url' => 'https://rgesol.com/',
        ],

        'memberOf' => [
            [
                '@type' => 'Organization',

                'name' => 'Private Directors Association',
            ],

            [
                '@type' => 'Organization',

                'name' => 'IEEE',
            ],

            [
                '@type' => 'Organization',

                'name' => 'ISC2',
            ],

            [
                '@type' => 'Organization',

                'name' => 'Project Management Institute',
            ],
        ],

        'alumniOf' => [
            [
                '@type' => 'CollegeOrUniversity',

                'name' => 'Purdue University Global',
            ],

            [
                '@type' => 'CollegeOrUniversity',

                'name' => 'University of Illinois Springfield',
            ],
        ],

        'hasCredential' => [
            [
                '@type' => 'EducationalOccupationalCredential',

                'name' => 'Master of Business Administration',
            ],

            [
                '@type' => 'EducationalOccupationalCredential',

                'name' => 'Certified Information Systems Security Professional',
            ],

            [
                '@type' => 'EducationalOccupationalCredential',

                'name' => 'Project Management Professional',
            ],

            [
                '@type' => 'EducationalOccupationalCredential',

                'name' => 'Wharton Corporate Governance Certificate',
            ],
        ],

        'knowsAbout' => [
            'AI Strategy and Enablement',
            'Artificial Intelligence',
            'Cybersecurity',
            'Enterprise Technology',
            'Infrastructure and Operations',
            'Technology Value Creation',
            'Enterprise Performance',
            'Technology Strategy',
            'Technology Investment',
            'Technology Modernization',
            'Enterprise Architecture',
            'Cloud Computing',
            'Vendor Rationalization',
            'Post-Acquisition Integration',
            'Program Recovery',
            'Operating Model Improvement',
            'Digital Transformation',
        ],

        'knowsLanguage' => [
            'en',
        ],
    ];
}
