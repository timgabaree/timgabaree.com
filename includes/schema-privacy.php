<?php
require_once __DIR__ . '/bootstrap.php';
if (!isset($pageTitle)) {
    $pageTitle = 'Privacy Policy | ' . SITE_NAME;
}
if (!isset($metaDescription)) {
    $metaDescription = '';
}
if (!isset($canonicalUrl)) {
    $canonicalUrl = SITE_URL . '/privacy.php';
}
if (!isset($privacyModifiedIso)) {
    $privacyModifiedIso = '2026-07-31';
}
$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebSite',
            '@id' => SITE_URL . '/#website',
            'url' => SITE_URL . '/',
            'name' => SITE_NAME,
            'description' =>
                'The professional website of Portfolio CIO and technology executive Tim Gabaree.',
            'inLanguage' => 'en-US',
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'description' => $metaDescription,
            'isPartOf' => [
                '@id' => SITE_URL . '/#website',
            ],
            'about' => [
                '@id' => SITE_URL . '/#person',
            ],
            'dateModified' => $privacyModifiedIso,
            'inLanguage' => 'en-US',
        ],
        [
            '@type' => 'Person',
            '@id' => SITE_URL . '/#person',
            'name' => SITE_NAME,
            'url' => SITE_URL . '/',
            'jobTitle' => 'Portfolio CIO',
            'email' => 'mailto:' . SITE_EMAIL,
            'telephone' => SITE_PHONE,
            'sameAs' => SITE_SOCIAL_PROFILES,
        ],
    ],
];