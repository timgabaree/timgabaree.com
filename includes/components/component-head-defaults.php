<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Page Metadata Defaults
|--------------------------------------------------------------------------
|
| Individual pages may define these variables before loading
| component-head.php. These defaults are used only when a page has
| not supplied a value.
|
*/

if (!isset($pageTitle)) {
    $pageTitle = SITE_NAME;
}

if (!isset($metaDescription)) {
    $metaDescription = '';
}

if (!isset($canonicalUrl)) {
    $canonicalUrl = SITE_URL . '/';
}

if (!isset($robots)) {
    $robots =
        'index, follow, max-image-preview:large, ' .
        'max-snippet:-1, max-video-preview:-1';
}

/*
|--------------------------------------------------------------------------
| Open Graph Defaults
|--------------------------------------------------------------------------
*/

if (!isset($ogLocale)) {
    $ogLocale = 'en_US';
}

if (!isset($ogType)) {
    $ogType = 'website';
}

if (!isset($ogTitle)) {
    $ogTitle = $pageTitle;
}

if (!isset($ogDescription)) {
    $ogDescription = $metaDescription;
}

if (!isset($ogImage)) {
    $ogImage =
        SITE_URL .
        '/media/profile-pic-tim-gabaree-900x1200.webp';
}

if (!isset($ogImageType)) {
    $ogImageType = 'image/webp';
}

if (!isset($ogImageWidth)) {
    $ogImageWidth = 900;
}

if (!isset($ogImageHeight)) {
    $ogImageHeight = 1200;
}

if (!isset($ogImageAlt)) {
    $ogImageAlt =
        'Tim Gabaree, Portfolio CIO and technology executive';
}

/*
|--------------------------------------------------------------------------
| X / Twitter Defaults
|--------------------------------------------------------------------------
*/

if (!isset($twitterCard)) {
    $twitterCard = 'summary';
}

if (!isset($twitterTitle)) {
    $twitterTitle = $ogTitle;
}

if (!isset($twitterDescription)) {
    $twitterDescription = $ogDescription;
}

if (!isset($twitterImage)) {
    $twitterImage = $ogImage;
}

if (!isset($twitterImageAlt)) {
    $twitterImageAlt = $ogImageAlt;
}

/*
|--------------------------------------------------------------------------
| Performance Defaults
|--------------------------------------------------------------------------
*/

if (!isset($preloadImage)) {
    $preloadImage = null;
}