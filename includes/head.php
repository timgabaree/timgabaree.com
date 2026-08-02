<?php
require_once __DIR__ . '/bootstrap.php';
require __DIR__ . '/head-defaults.php';
?>
<!doctype html>
<html lang="en">
<head>
<!-- Core Metadata -->
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible"
      content="IE=edge">
<meta name="theme-color"
      content="#111111">
<title><?= e($pageTitle) ?></title>
<meta name="author"
      content="<?= e(SITE_NAME) ?>">
<meta name="description"
      content="<?= e($metaDescription) ?>">
<!-- Search Engine Directives -->
<meta name="robots"
      content="<?= e($robots) ?>">
<!-- Canonical -->
<link rel="canonical"
      href="<?= e($canonicalUrl) ?>">
<!-- Open Graph -->
<meta property="og:locale"
      content="<?= e($ogLocale) ?>">
<meta property="og:type"
      content="<?= e($ogType) ?>">
<meta property="og:site_name"
      content="<?= e(SITE_NAME) ?>">
<meta property="og:url"
      content="<?= e($canonicalUrl) ?>">
<meta property="og:title"
      content="<?= e($ogTitle) ?>">
<meta property="og:description"
      content="<?= e($ogDescription) ?>">
<meta property="og:image"
      content="<?= e($ogImage) ?>">
<meta property="og:image:secure_url"
      content="<?= e($ogImage) ?>">
<meta property="og:image:type"
      content="<?= e($ogImageType) ?>">
<meta property="og:image:width"
      content="<?= e((string) $ogImageWidth) ?>">
<meta property="og:image:height"
      content="<?= e((string) $ogImageHeight) ?>">
<meta property="og:image:alt"
      content="<?= e($ogImageAlt) ?>">
<?php if ($ogType === 'profile'): ?>
<meta property="profile:first_name"
      content="Tim">
<meta property="profile:last_name"
      content="Gabaree">
<?php endif; ?>
<!-- X / Twitter -->
<meta name="twitter:card"
      content="<?= e($twitterCard) ?>">
<meta name="twitter:title"
      content="<?= e($twitterTitle) ?>">
<meta name="twitter:description"
      content="<?= e($twitterDescription) ?>">
<meta name="twitter:image"
      content="<?= e($twitterImage) ?>">
<meta name="twitter:image:alt"
      content="<?= e($twitterImageAlt) ?>">
<?php require __DIR__ . '/schema.php'; ?>
<!-- Favicons -->
<link rel="icon"
      type="image/png"
      sizes="96x96"
      href="<?= e(asset('/favicon-96.png', FAVICON_VERSION)) ?>">
<link rel="apple-touch-icon"
      sizes="180x180"
      href="<?= e(asset('/apple-touch-icon.png', FAVICON_VERSION)) ?>">
<link rel="icon"
      href="<?= e(asset('/favicon.ico', FAVICON_VERSION)) ?>">
<!-- Performance -->
<link rel="preconnect"
      href="https://www.googletagmanager.com">
<link rel="preload"
      href="/fonts/Roboto-Regular.woff2"
      as="font"
      type="font/woff2"
      crossorigin>
<link rel="preload"
      href="/fonts/Roboto-Bold.woff2"
      as="font"
      type="font/woff2"
      crossorigin>
<?php if (is_string($preloadImage) && $preloadImage !== ''): ?>
<link rel="preload"
      as="image"
      href="<?= e($preloadImage) ?>"
      type="image/webp"
      fetchpriority="high">
<?php endif; ?>
<!-- Stylesheet -->
<link rel="stylesheet"
      href="<?= e(asset('/css/style.css', CSS_VERSION)) ?>">
<?php require __DIR__ . '/analytics-head.php'; ?>
</head>
