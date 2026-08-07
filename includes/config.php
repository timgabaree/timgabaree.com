<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Site Identity
|--------------------------------------------------------------------------
*/

const SITE_NAME              = 'Tim Gabaree';
const SITE_URL               = 'https://timgabaree.com';

/*
|--------------------------------------------------------------------------
| Contact Information
|--------------------------------------------------------------------------
*/

const SITE_PHONE             = '+1-571-762-3769';
const SITE_EMAIL             = 'tim@timgabaree.com';
const SITE_FORM_EMAIL        = 'webform@timgabaree.com';

/*
|--------------------------------------------------------------------------
| Copyright
|--------------------------------------------------------------------------
*/

const COPYRIGHT_START_YEAR   = 2023;
const COPYRIGHT_YEAR         = 2026;
const COPYRIGHT_NAME         = 'Tim Gabaree';

/*
|--------------------------------------------------------------------------
| Localization
|--------------------------------------------------------------------------
*/

const TIMEZONE               = 'America/Chicago';

date_default_timezone_set(TIMEZONE);

/*
|--------------------------------------------------------------------------
| Third-Party Services
|--------------------------------------------------------------------------
*/

const GTM_ID          = 'GTM-ML7T9TJ8';
const SITE_CALENDLY   = 'https://calendly.com/timgabaree/meet-with-tim';
const SITE_LINKEDIN   = 'https://www.linkedin.com/in/timgabaree';
const SITE_GITHUB     = 'https://github.com/timgabaree';
const SITE_BLOGSPOT   = 'https://timgabaree.blogspot.com';
const SITE_TWITTER    = 'https://x.com/timgabaree';
const SITE_BLUESKY    = 'https://bsky.app/profile/timgabaree.bsky.social';
const SITE_SOCIAL_PROFILES = [
 	SITE_LINKEDIN,
 	SITE_GITHUB,
 	SITE_BLOGSPOT,
 	SITE_TWITTER,
 	SITE_BLUESKY,
];

const DOCSEND_EXECUTIVE_PROFILE = 'https://docsend.com/view/8sd3u5znxdmwtaqp';
const DOCSEND_RESUME            = 'https://docsend.com/view/r4xai6b9k5zq6y5n';
const DOCSEND_EXECUTIVE_BIO     = 'https://docsend.com/view/g4ipzhamredfwbtb';
const DOCSEND_BOARD_RESUME      = 'https://docsend.com/view/68wp4jd332kg86d3';
const DOCSEND_BOARD_BIO         = 'https://docsend.com/view/z6gz9pvv9jkr8zfk';

/*
|--------------------------------------------------------------------------
| Normalized Site Configuration
|--------------------------------------------------------------------------
|
| These constants provide the standardized configuration names used by
| the newer shared application framework.
|
| Existing constants remain available during the refactor so current
| pages and components continue working without modification.
|
*/

/*
|--------------------------------------------------------------------------
| Site Identity and Localization
|--------------------------------------------------------------------------
*/

const SITE_LEGAL_NAME =
    'Tim Gabaree';

const SITE_LANGUAGE =
    'en-US';

const SITE_LOCALE =
    'en_US';

const SITE_TIMEZONE =
    TIMEZONE;

/*
|--------------------------------------------------------------------------
| Site Description
|--------------------------------------------------------------------------
*/

const SITE_DESCRIPTION =
    'Executive technology leadership, enterprise transformation, infrastructure modernization, cybersecurity, AI enablement, and technology value creation.';

const SITE_SHORT_DESCRIPTION =
    'Executive technology leadership and technology value creation.';

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
| Display Contact Information
|--------------------------------------------------------------------------
*/

const SITE_PHONE_DISPLAY =
    '571.762.3769';

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

const SITE_ROBOTS_PATH =
    '/robots.txt';

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

const SITE_CONTACT_SUBMIT_URL =
    SITE_URL .
    SITE_CONTACT_SUBMIT_PATH;

const SITE_PRIVACY_URL =
    SITE_URL .
    SITE_PRIVACY_PATH;

const SITE_THANK_YOU_URL =
    SITE_URL .
    SITE_THANK_YOU_PATH;

const SITE_ROBOTS_URL =
    SITE_URL .
    SITE_ROBOTS_PATH;

const SITE_SITEMAP_URL =
    SITE_URL .
    SITE_SITEMAP_PATH;

const SITE_VCARD_URL =
    SITE_URL .
    SITE_VCARD_PATH;

/*
|--------------------------------------------------------------------------
| Branding and Images
|--------------------------------------------------------------------------
*/

const SITE_PROFILE_IMAGE =
    SITE_URL .
    '/media/profile-pic-tim-gabaree-900x1200.webp';

const SITE_PROFILE_IMAGE_PATH =
    '/media/profile-pic-tim-gabaree-900x1200.webp';

const SITE_PROFILE_IMAGE_WIDTH =
    900;

const SITE_PROFILE_IMAGE_HEIGHT =
    1200;

const SITE_PROFILE_SQUARE_IMAGE =
    SITE_URL .
    '/media/profile-pic-tim-gabaree-200x200.png';

const SITE_PROFILE_SQUARE_IMAGE_PATH =
    '/media/profile-pic-tim-gabaree-200x200.png';

const SITE_PROFILE_SQUARE_IMAGE_WIDTH =
    200;

const SITE_PROFILE_SQUARE_IMAGE_HEIGHT =
    200;

const SITE_PRIMARY_IMAGE =
    SITE_URL .
    '/media/profile-pic-tim-gabaree-900x1200.webp';

const SITE_PRIMARY_IMAGE_PATH =
    '/media/profile-pic-tim-gabaree-900x1200.webp';

const SITE_PRIMARY_IMAGE_WIDTH =
    900;

const SITE_PRIMARY_IMAGE_HEIGHT =
    1200;

const SITE_QR_CODE =
    SITE_URL .
    '/media/qr-code-tim-gabaree-500x500.webp';

const SITE_QR_CODE_PATH =
    '/media/qr-code-tim-gabaree-500x500.webp';

/*
|--------------------------------------------------------------------------
| Structured-Data Identifiers
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

/*
|--------------------------------------------------------------------------
| Analytics Compatibility
|--------------------------------------------------------------------------
*/

const GOOGLE_TAG_MANAGER_ID =
    GTM_ID;

const GOOGLE_ANALYTICS_ID =
    '';

/*
|--------------------------------------------------------------------------
| Copyright Compatibility
|--------------------------------------------------------------------------
*/

const SITE_COPYRIGHT_START_YEAR =
    COPYRIGHT_START_YEAR;

const SITE_COPYRIGHT_YEAR =
    COPYRIGHT_YEAR;

const SITE_COPYRIGHT_OWNER =
    COPYRIGHT_NAME;
