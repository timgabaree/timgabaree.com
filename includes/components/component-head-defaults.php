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
| Page Image
|--------------------------------------------------------------------------
*/

$pageImageKey =
    $pageImageKey ??
    'profile';

$pageImage =
    getSiteImage(
        $pageImageKey
    );

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
    (
        $pageImage['url'] ??
        ''
    );

$ogImageType =
    $ogImageType ??
    (
        $pageImage['type'] ??
        ''
    );

$ogImageWidth =
    $ogImageWidth ??
    (
        $pageImage['width'] ??
        0
    );

$ogImageHeight =
    $ogImageHeight ??
    (
        $pageImage['height'] ??
        0
    );

$ogImageAlt =
    $ogImageAlt ??
    (
        $pageImage['alt'] ??
        ''
    );

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
    $ogImage;

$twitterImageAlt =
    $twitterImageAlt ??
    $ogImageAlt;

/*
|--------------------------------------------------------------------------
| Page Images
|--------------------------------------------------------------------------
*/

$preloadImageKey =
    $preloadImageKey ??
    '';

$preloadImageData =
    $preloadImageKey !== ''
        ? getSiteImage(
            $preloadImageKey
        )
        : [];

$preloadImage =
    $preloadImage ??
    (
        $preloadImageData['path'] ??
        ''
    );
