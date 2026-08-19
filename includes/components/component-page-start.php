<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Page Start Component
|--------------------------------------------------------------------------
|
| Initializes shared page configuration, metadata defaults, structured
| data, document head, and page header for a public page.
|
| Expected variable:
|
| $page
|
| bootstrap.php must already be loaded by the calling page.
|
*/

/*
|--------------------------------------------------------------------------
| Page Identifier
|--------------------------------------------------------------------------
*/

if (
    !isset($page) ||
    !is_string($page) ||
    trim($page) === ''
) {
    throw new RuntimeException(
        'A valid page identifier is required.'
    );
}

$page =
    trim($page);

/*
|--------------------------------------------------------------------------
| Page Configuration
|--------------------------------------------------------------------------
*/

$pageConfiguration =
    pageConfig(
        $page
    );

if ($pageConfiguration === []) {
    throw new RuntimeException(
        'Page configuration is not defined for: ' .
        $page
    );
}

/*
|--------------------------------------------------------------------------
| Core Page Values
|--------------------------------------------------------------------------
*/

$bodyClass =
    $pageConfiguration['body_class'] ??
    '';

$pageTitle =
    $pageConfiguration['title'] ??
    SITE_NAME;

$metaDescription =
    $pageConfiguration['description'] ??
    SITE_DESCRIPTION;

$robots =
    $pageConfiguration['robots'] ??
    'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

$canonicalUrl =
    $pageConfiguration['canonical_url'] ??
    SITE_HOME_URL;

/*
|--------------------------------------------------------------------------
| Open Graph
|--------------------------------------------------------------------------
*/

$ogType =
    $pageConfiguration['og_type'] ??
    'website';

$ogTitle =
    $pageConfiguration['og_title'] ??
    $pageTitle;

$ogDescription =
    $pageConfiguration['og_description'] ??
    $metaDescription;

/*
|--------------------------------------------------------------------------
| X / Twitter
|--------------------------------------------------------------------------
*/

$twitterCard =
    $pageConfiguration['twitter_card'] ??
    'summary';

$twitterTitle =
    $pageConfiguration['twitter_title'] ??
    $ogTitle;

$twitterDescription =
    $pageConfiguration['twitter_description'] ??
    $ogDescription;

/*
|--------------------------------------------------------------------------
| Page Images
|--------------------------------------------------------------------------
*/

$pageImageKey =
    $pageConfiguration['image'] ??
    'profile';

$preloadImageKey =
    $pageConfiguration['preload_image'] ??
    '';

/*
|--------------------------------------------------------------------------
| Page Dates
|--------------------------------------------------------------------------
|
| Publication and modification dates are controlled centrally through
| PAGE_METADATA in version.php.
|
*/

$pageDatePublished =
    pagePublished(
        $page
    );

$pageDateModified =
    pageModified(
        $page
    );

/*
|--------------------------------------------------------------------------
| Page Image Data
|--------------------------------------------------------------------------
*/

$pageImage =
    getSiteImage(
        $pageImageKey
    );

/*
|--------------------------------------------------------------------------
| Open Graph Image
|--------------------------------------------------------------------------
*/

$ogLocale =
    SITE_LOCALE;

$ogImage =
    $pageImage['url'] ??
    '';

$ogImageType =
    $pageImage['type'] ??
    '';

$ogImageWidth =
    $pageImage['width'] ??
    0;

$ogImageHeight =
    $pageImage['height'] ??
    0;

$ogImageAlt =
    $pageImage['alt'] ??
    '';

/*
|--------------------------------------------------------------------------
| X / Twitter Image
|--------------------------------------------------------------------------
*/

$twitterImage =
    $ogImage;

$twitterImageAlt =
    $ogImageAlt;

/*
|--------------------------------------------------------------------------
| Preload Image
|--------------------------------------------------------------------------
*/

$preloadImageData =
    $preloadImageKey !== ''
        ? getSiteImage(
            $preloadImageKey
        )
        : [];

$preloadImage =
    $preloadImageData['path'] ??
    '';

/*
|--------------------------------------------------------------------------
| Page Schema
|--------------------------------------------------------------------------
*/

$schemaFile =
    $pageConfiguration['schema'] ??
    '';

if (!is_string($schemaFile)) {
    throw new RuntimeException(
        'Invalid schema configuration for page: ' .
        $page
    );
}

$schemaFile =
    trim($schemaFile);

if ($schemaFile !== '') {
    if (
        preg_match(
            '/^schema-[a-z0-9-]+\\.php$/',
            $schemaFile
        ) !== 1
    ) {
        throw new RuntimeException(
            'A valid schema file is required for page: ' .
            $page
        );
    }

    $schemaPath =
        dirname(__DIR__) .
        '/schema/' .
        $schemaFile;

    if (!is_file($schemaPath)) {
        throw new RuntimeException(
            'Schema file not found for page: ' .
            $page
        );
    }

    require $schemaPath;
}

/*
|--------------------------------------------------------------------------
| Shared Page Components
|--------------------------------------------------------------------------
*/

require __DIR__ .
    '/component-head.php';

require __DIR__ .
    '/component-header.php';
