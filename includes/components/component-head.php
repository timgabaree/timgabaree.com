<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| HTML Head
|--------------------------------------------------------------------------
|
| Shared document head for all public pages.
|
| Optional page-specific variables:
|
| $pageTitle
| $metaDescription
| $canonicalUrl
| $robots
| $ogLocale
| $ogType
| $ogTitle
| $ogDescription
| $ogImage
| $ogImageType
| $ogImageWidth
| $ogImageHeight
| $ogImageAlt
| $twitterCard
| $twitterTitle
| $twitterDescription
| $twitterImage
| $twitterImageAlt
| $preloadImage
|
*/

/*
|--------------------------------------------------------------------------
| Component Requirements
|--------------------------------------------------------------------------
|
| bootstrap.php must already be loaded by the calling page.
|
| Page-specific values should be assigned before requiring this component.
| Missing optional metadata values are normalized by
| component-head-defaults.php.
|
*/

require_once __DIR__ .
    '/component-head-defaults.php';

?>
<!doctype html>

<html lang="<?= e(SITE_LANGUAGE) ?>">

<head>

<!-- ==========================================================
     Core Metadata
=========================================================== -->

<meta charset="<?= e(APP_CHARSET) ?>">

<meta
  name="viewport"
  content="width=device-width, initial-scale=1">

<meta
  name="theme-color"
  content="#111111">

<title><?= e($pageTitle) ?></title>

<meta
  name="author"
  content="<?= e(SITE_NAME) ?>">

<meta
  name="description"
  content="<?= e($metaDescription) ?>">

<meta
  name="robots"
  content="<?= e($robots) ?>">

<?php if ($canonicalUrl !== ''): ?>

<link
  rel="canonical"
  href="<?= e($canonicalUrl) ?>">

<?php endif; ?>

<!-- ==========================================================
     Open Graph
=========================================================== -->

<meta
  property="og:locale"
  content="<?= e($ogLocale) ?>">

<meta
  property="og:type"
  content="<?= e($ogType) ?>">

<meta
  property="og:site_name"
  content="<?= e(SITE_NAME) ?>">

<meta
  property="og:title"
  content="<?= e($ogTitle) ?>">

<meta
  property="og:description"
  content="<?= e($ogDescription) ?>">

<?php if ($canonicalUrl !== ''): ?>

<meta
  property="og:url"
  content="<?= e($canonicalUrl) ?>">

<?php endif; ?>

<meta
  property="og:image"
  content="<?= e($ogImage) ?>">

<meta
  property="og:image:secure_url"
  content="<?= e($ogImage) ?>">

<meta
  property="og:image:type"
  content="<?= e($ogImageType) ?>">

<meta
  property="og:image:width"
  content="<?= e($ogImageWidth) ?>">

<meta
  property="og:image:height"
  content="<?= e($ogImageHeight) ?>">

<meta
  property="og:image:alt"
  content="<?= e($ogImageAlt) ?>">

<?php if ($ogType === 'profile'): ?>

<meta
  property="profile:first_name"
  content="Tim">

<meta
  property="profile:last_name"
  content="Gabaree">

<?php endif; ?>

<!-- ==========================================================
     X / Twitter
=========================================================== -->

<meta
  name="twitter:card"
  content="<?= e($twitterCard) ?>">

<meta
  name="twitter:title"
  content="<?= e($twitterTitle) ?>">

<meta
  name="twitter:description"
  content="<?= e($twitterDescription) ?>">

<meta
  name="twitter:image"
  content="<?= e($twitterImage) ?>">

<meta
  name="twitter:image:alt"
  content="<?= e($twitterImageAlt) ?>">

<!-- ==========================================================
     Favicons
=========================================================== -->

<link
  rel="icon"
  href="<?= e(
      asset(
          '/favicon.ico',
          VERSION_FAVICONS
      )
  ) ?>">

<link
  rel="icon"
  type="image/png"
  sizes="48x48"
  href="<?= e(
      asset(
          '/favicon-48.png',
          VERSION_FAVICONS
      )
  ) ?>">

<link
  rel="icon"
  type="image/png"
  sizes="96x96"
  href="<?= e(
      asset(
          '/favicon-96.png',
          VERSION_FAVICONS
      )
  ) ?>">

<link
  rel="icon"
  type="image/png"
  sizes="192x192"
  href="<?= e(
      asset(
          '/favicon-192.png',
          VERSION_FAVICONS
      )
  ) ?>">

<link
  rel="apple-touch-icon"
  sizes="180x180"
  href="<?= e(
      asset(
          '/apple-touch-icon.png',
          VERSION_FAVICONS
      )
  ) ?>">

<!-- ==========================================================
     Performance
=========================================================== -->

<link
  rel="preconnect"
  href="https://www.googletagmanager.com">

<link
  rel="preload"
  href="<?= e(
      asset(
          '/fonts/Roboto-Regular.woff2',
          VERSION_FONTS
      )
  ) ?>"
  as="font"
  type="font/woff2"
  crossorigin>

<link
  rel="preload"
  href="<?= e(
      asset(
          '/fonts/Roboto-Bold.woff2',
          VERSION_FONTS
      )
  ) ?>"
  as="font"
  type="font/woff2"
  crossorigin>

<?php if ($preloadImage !== ''): ?>

<link
  rel="preload"
  as="image"
  href="<?= e($preloadImage) ?>"
  fetchpriority="high">

<?php endif; ?>

<!-- ==========================================================
     Stylesheet
=========================================================== -->

<link
  rel="stylesheet"
  href="<?= e(
      asset(
          '/css/style.css',
          VERSION_CSS
      )
  ) ?>">

<!-- ==========================================================
     Structured Data
=========================================================== -->

<?php

require dirname(__DIR__) .
    '/schema/schema.php';

?>

<!-- ==========================================================
     Analytics
=========================================================== -->

<?php

require __DIR__ .
    '/component-analytics-head.php';

?>

</head>