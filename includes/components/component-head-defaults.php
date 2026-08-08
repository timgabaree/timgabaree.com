<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Head Defaults
|--------------------------------------------------------------------------
|
| Establishes default metadata values for public pages.
|
| A page may override any value before requiring component-head.php.
|
*/

/*
|--------------------------------------------------------------------------
| Page Identity
|--------------------------------------------------------------------------
*/

$page =
    $page ??
    '';

$bodyClass =
    $bodyClass ??
    '';

/*
|--------------------------------------------------------------------------
| Page Dates
|--------------------------------------------------------------------------
|
| Dates are controlled centrally through PAGE_METADATA in version.php.
|
*/

$pageDatePublished =
    $pageDatePublished ??
    pagePublished(
        (string) $page
    );

$pageDateModified =
    $pageDateModified ??
    pageModified(
        (string) $page
    );

/*
|--------------------------------------------------------------------------
| Core Page Metadata
|--------------------------------------------------------------------------
*/

$pageTitle =
    $pageTitle ??
    SITE_NAME;

$metaDescription =
    $metaDescription ??
    SITE_DESCRIPTION;

$robots =
    $robots ??
    'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

$canonicalUrl =
    $canonicalUrl ??
    SITE_HOME_URL;

/*
|--------------------------------------------------------------------------
| Open Graph
|--------------------------------------------------------------------------
*/

$ogLocale =
    $ogLocale ??
    SITE_LOCALE;

$ogType =
    $ogType ??
    'website';

$ogTitle =
    $ogTitle ??
    $pageTitle;

$ogDescription =
    $ogDescription ??
    $metaDescription;

$ogImage =
    $ogImage ??
    SITE_PRIMARY_IMAGE;

$ogImageType =
    $ogImageType ??
    'image/webp';

$ogImageWidth =
    $ogImageWidth ??
    SITE_PRIMARY_IMAGE_WIDTH;

$ogImageHeight =
    $ogImageHeight ??
    SITE_PRIMARY_IMAGE_HEIGHT;

$ogImageAlt =
    $ogImageAlt ??
    'Tim Gabaree, Portfolio CIO and technology executive';

/*
|--------------------------------------------------------------------------
| X / Twitter
|--------------------------------------------------------------------------
*/

$twitterCard =
    $twitterCard ??
    'summary';

$twitterTitle =
    $twitterTitle ??
    $ogTitle;

$twitterDescription =
    $twitterDescription ??
    $ogDescription;

$twitterImage =
    $twitterImage ??
    SITE_PROFILE_SQUARE_IMAGE;

$twitterImageAlt =
    $twitterImageAlt ??
    $ogImageAlt;

/*
|--------------------------------------------------------------------------
| Performance
|--------------------------------------------------------------------------
*/

$preloadImage =
    $preloadImage ??
    '';