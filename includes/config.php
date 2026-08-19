<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Site Identity
|--------------------------------------------------------------------------
*/

const SITE_NAME =
    'Tim Gabaree';

const SITE_URL =
    'https://timgabaree.com';

/*
|--------------------------------------------------------------------------
| Contact Information
|--------------------------------------------------------------------------
*/

const SITE_PHONE =
    '+1-571-762-3769';

const SITE_EMAIL =
    'tim@timgabaree.com';

const SITE_FORM_EMAIL =
    'webform@timgabaree.com';

/*
|--------------------------------------------------------------------------
| Copyright
|--------------------------------------------------------------------------
*/

const SITE_COPYRIGHT_START_YEAR =
    2023;

const SITE_COPYRIGHT_OWNER =
    'Tim Gabaree';

/*
|--------------------------------------------------------------------------
| Localization
|--------------------------------------------------------------------------
*/

const SITE_LANGUAGE =
    'en-US';

const SITE_LOCALE =
    'en_US';

const SITE_TIMEZONE =
    'America/Chicago';

/*
|--------------------------------------------------------------------------
| Third-Party Services
|--------------------------------------------------------------------------
*/

const GOOGLE_TAG_MANAGER_ID =
    'GTM-ML7T9TJ8';

const GOOGLE_ANALYTICS_ID =
    '';

const SITE_CALENDLY =
    'https://calendly.com/timgabaree/meet-with-tim';

const SITE_LINKEDIN =
    'https://www.linkedin.com/in/timgabaree';

const SITE_GITHUB =
    'https://github.com/timgabaree';

const SITE_BLOGSPOT =
    'https://timgabaree.blogspot.com';

const SITE_TWITTER =
    'https://x.com/timgabaree';

const SITE_BLUESKY =
    'https://bsky.app/profile/timgabaree.bsky.social';

const SITE_SOCIAL_PROFILES = [
    SITE_LINKEDIN,
    SITE_GITHUB,
    SITE_BLOGSPOT,
    SITE_TWITTER,
    SITE_BLUESKY,
];

const DOCSEND_EXECUTIVE_PROFILE =
    'https://docsend.com/view/8sd3u5znxdmwtaqp';

const DOCSEND_RESUME =
    'https://docsend.com/view/r4xai6b9k5zq6y5n';

const DOCSEND_EXECUTIVE_BIO =
    'https://docsend.com/view/g4ipzhamredfwbtb';

const DOCSEND_BOARD_RESUME =
    'https://docsend.com/view/68wp4jd332kg86d3';

const DOCSEND_BOARD_BIO =
    'https://docsend.com/view/z6gz9pvv9jkr8zfk';

/*
|--------------------------------------------------------------------------
| Site Description
|--------------------------------------------------------------------------
*/

const SITE_DESCRIPTION =
    'Executive technology leadership, enterprise transformation, infrastructure modernization, cybersecurity, AI enablement, and technology value creation.';

/*
|--------------------------------------------------------------------------
| Contact Form Sender
|--------------------------------------------------------------------------
*/

const SITE_FORM_SENDER_EMAIL =
    SITE_FORM_EMAIL;

const SITE_FORM_SENDER_NAME =
    'Tim Gabaree Website';

/*
|--------------------------------------------------------------------------
| Site Paths
|--------------------------------------------------------------------------
*/

const SITE_HOME_PATH =
    '/';

const SITE_ABOUT_PATH =
    '/about';

const SITE_CONTACT_PATH =
    '/contact';

const SITE_CONTACT_SUBMIT_PATH =
    '/contact-submit';

const SITE_PRIVACY_PATH =
    '/privacy';

const SITE_THANK_YOU_PATH =
    '/thank-you';

const SITE_SITEMAP_PATH =
    '/sitemap.xml';

const SITE_VCARD_PATH =
    '/timgabaree.vcf';

/*
|--------------------------------------------------------------------------
| Site URLs
|--------------------------------------------------------------------------
*/

const SITE_HOME_URL =
    SITE_URL .
    SITE_HOME_PATH;

const SITE_ABOUT_URL =
    SITE_URL .
    SITE_ABOUT_PATH;

const SITE_CONTACT_URL =
    SITE_URL .
    SITE_CONTACT_PATH;

const SITE_PRIVACY_URL =
    SITE_URL .
    SITE_PRIVACY_PATH;

const SITE_THANK_YOU_URL =
    SITE_URL .
    SITE_THANK_YOU_PATH;

/*
|--------------------------------------------------------------------------
| Public Page Configuration
|--------------------------------------------------------------------------
|
| Defines shared presentation, metadata, social, image, and schema
| configuration for public pages.
|
| Publication and modification dates remain centralized separately in
| PAGE_METADATA within version.php.
|
*/

const PAGE_CONFIG = [
    'home' => [
        'title' =>
            'Tim Gabaree | Portfolio CIO | Technology Value Creation | Enterprise Performance',

        'description' =>
            'Tim Gabaree is a Portfolio CIO and technology executive helping organizations improve performance through technology value creation, governance, operating model transformation, and enterprise leadership.',

        'canonical_url' =>
            SITE_HOME_URL,

        'og_type' =>
            'profile',

        'og_title' =>
            'Tim Gabaree | Portfolio CIO | Technology Value Creation',

        'og_description' =>
            'Tim Gabaree is a Portfolio CIO and technology executive helping organizations improve performance through governance, technology value creation, and operating model transformation.',

        'image' =>
            'profile',

        'preload_image' =>
            'background',

        'schema' =>
            'schema-home.php',
    ],

    'about' => [
        'title' =>
            'About Tim Gabaree | Portfolio CIO | Technology Value Creation',

        'description' =>
            'About Tim Gabaree, Portfolio CIO and technology executive focused on governance, technology value creation, operating model transformation, and enterprise performance.',

        'canonical_url' =>
            SITE_ABOUT_URL,

        'og_type' =>
            'profile',

        'og_title' =>
            'About Tim Gabaree | Portfolio CIO',

        'og_description' =>
            'About Tim Gabaree, Portfolio CIO, technology executive, board advisor, veteran, husband, father, and lifelong learner.',

        'twitter_card' =>
            'summary_large_image',

        'twitter_description' =>
            'Technology executive, board advisor, veteran, husband, father, and lifelong learner.',

        'image' =>
            'about_family',

        'preload_image' =>
            'about_family',

        'schema' =>
            'schema-about.php',
    ],

    'contact' => [
        'body_class' =>
            'contact-body',

        'title' =>
            'Connect with Tim Gabaree | Executive Contact',

        'description' =>
            'Connect with Tim Gabaree, Portfolio CIO and technology executive focused on technology value creation, governance, and enterprise performance.',

        'canonical_url' =>
            SITE_CONTACT_URL,

        'og_type' =>
            'website',

        'og_title' =>
            'Connect with Tim Gabaree',

        'og_description' =>
            'Save Tim’s contact information, connect on LinkedIn, schedule a meeting, or review executive materials.',

        'twitter_description' =>
            'Portfolio CIO | Technology Value Creation | Enterprise Performance',

        'image' =>
            'profile',

        'preload_image' =>
            'profile',

        'schema' =>
            'schema-contact.php',
    ],

    'privacy' => [
        'body_class' =>
            'privacy-body',

        'title' =>
            'Privacy Policy | Tim Gabaree',

        'description' =>
            'Privacy Policy for timgabaree.com explaining what information may be collected, how it is used, and the privacy choices available to website visitors.',

        'canonical_url' =>
            SITE_PRIVACY_URL,

        'og_type' =>
            'website',

        'og_title' =>
            'Privacy Policy | Tim Gabaree',

        'og_description' =>
            'Privacy Policy for timgabaree.com explaining how information may be collected, used, retained, and protected.',

        'twitter_description' =>
            'Privacy Policy for timgabaree.com explaining how visitor information may be collected and used.',

        'image' =>
            'profile',

        'preload_image' =>
            'background',

        'schema' =>
            'schema-privacy.php',
    ],

    'error-403' => [
        'title' =>
            'Access Denied | Tim Gabaree',

        'description' =>
            'Access to this page or resource is restricted.',

        'robots' =>
            'noindex, follow',

        'canonical_url' =>
            '',

        'image' =>
            'profile',

        'preload_image' =>
            '',

        'schema' =>
            '',
    ],

    'error-404' => [
        'title' =>
            'Page Not Found | Tim Gabaree',

        'description' =>
            'The requested page could not be found on timgabaree.com.',

        'robots' =>
            'noindex, follow',

        'canonical_url' =>
            '',

        'image' =>
            'profile',

        'preload_image' =>
            '',

        'schema' =>
            '',
    ],

    'error-500' => [
        'title' =>
            'Server Error | Tim Gabaree',

        'description' =>
            'An unexpected internal server error occurred on timgabaree.com.',

        'robots' =>
            'noindex, nofollow',

        'canonical_url' =>
            '',

        'image' =>
            'profile',

        'preload_image' =>
            '',

        'schema' =>
            '',
    ],

    'thank-you' => [
        'body_class' =>
            'contact-body',

        'title' =>
            'Thank You | Tim Gabaree',

        'description' =>
            'Thank you for contacting Tim Gabaree. Your message has been received and will be reviewed personally.',

        'robots' =>
            'noindex, follow',

        'canonical_url' =>
            SITE_THANK_YOU_URL,

        'og_type' =>
            'website',

        'og_title' =>
            'Thank You | Tim Gabaree',

        'og_description' =>
            'Your message has been received. Thank you for continuing the conversation with Tim Gabaree.',

        'twitter_description' =>
            'Your message has been received. Thank you for continuing the conversation.',

        'image' =>
            'profile',

        'preload_image' =>
            '',

        'schema' =>
            'schema-thank-you.php',
    ],
];

/*
|--------------------------------------------------------------------------
| Structured Data Identifiers
|--------------------------------------------------------------------------
*/

const SITE_PERSON_ID =
    SITE_URL .
    '/#person';

const SITE_WEBSITE_ID =
    SITE_URL .
    '/#website';

const SITE_PRIMARY_IMAGE_ID =
    SITE_URL .
    '/#primaryimage';
