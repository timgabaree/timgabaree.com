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

    $image =
        getSiteImage(
            'profile'
        );

    $schema = [
        '@type' =>
            'ImageObject',

        '@id' =>
            SITE_PRIMARY_IMAGE_ID,

        'url' =>
            $image['url'] ??
            '',

        'contentUrl' =>
            $image['url'] ??
            '',

        'width' =>
            $image['width'] ??
            0,

        'height' =>
            $image['height'] ??
            0,

        'encodingFormat' =>
            $image['type'] ??
            '',

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

        'memberOf' => [
            [
                '@type' =>
                    'Organization',

                'name' =>
                    'Private Directors Association',
            ],

            [
                '@type' =>
                    'Organization',

                'name' =>
                    'IEEE',
            ],

            [
                '@type' =>
                    'Organization',

                'name' =>
                    'ISC2',
            ],

            [
                '@type' =>
                    'Organization',

                'name' =>
                    'Project Management Institute',
            ],
        ],

        'alumniOf' => [
            [
                '@type' =>
                    'CollegeOrUniversity',

                'name' =>
                    'Purdue University Global',
            ],

            [
                '@type' =>
                    'CollegeOrUniversity',

                'name' =>
                    'University of Illinois Springfield',
            ],
        ],

        'hasCredential' => [
            [
                '@type' =>
                    'EducationalOccupationalCredential',

                'name' =>
                    'Master of Business Administration',
            ],

            [
                '@type' =>
                    'EducationalOccupationalCredential',

                'name' =>
                    'Certified Information Systems Security Professional',
            ],

            [
                '@type' =>
                    'EducationalOccupationalCredential',

                'name' =>
                    'Project Management Professional',
            ],

            [
                '@type' =>
                    'EducationalOccupationalCredential',

                'name' =>
                    'Wharton Corporate Governance Certificate',
            ],
        ],

        'knowsAbout' => [
            'Technology Value Creation',
            'Enterprise Performance',
            'Technology Governance',
            'Corporate Governance',
            'Operating Model Transformation',
            'Technology Advisory',
            'Private Equity Portfolio Operations',
            'Post-Acquisition Integration',
            'Cybersecurity',
            'Enterprise Infrastructure',
            'Cloud Computing',
            'Artificial Intelligence',
            'AI Strategy',
            'Vendor Rationalization',
            'Program Recovery',
            'Digital Transformation',
            'Technology Strategy',
            'Enterprise Architecture',
        ],

        'knowsLanguage' => [
            'en',
        ],
    ];
}
