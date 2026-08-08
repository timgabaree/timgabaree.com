<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Home Page Structured Data
|--------------------------------------------------------------------------
|
| Builds the Schema.org graph for the Tim Gabaree home page.
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
| Home Profile Page
|--------------------------------------------------------------------------
*/

$profilePageSchema = [
    '@type' =>
        'ProfilePage',

    '@id' =>
        SITE_HOME_URL .
        '#webpage',

    'url' =>
        SITE_HOME_URL,

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

$personSchema['memberOf'] = [
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
];

$personSchema['alumniOf'] = [
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
];

$personSchema['hasCredential'] = [
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
];

$personSchema['knowsAbout'] = [
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
];

$personSchema['knowsLanguage'] = [
    'English',
];

$personSchema['mainEntityOfPage'] = [
    '@id' =>
        SITE_HOME_URL .
        '#webpage',
];

/*
|--------------------------------------------------------------------------
| Schema Graph
|--------------------------------------------------------------------------
*/

$schemaGraph = [
    $websiteSchema,
    $primaryImageSchema,
    $profilePageSchema,
    $personSchema,
];