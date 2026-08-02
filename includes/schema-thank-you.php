<?php
require_once __DIR__ . '/bootstrap.php';
if (!isset($pageTitle)) {
  $pageTitle = 'Thank You | ' . SITE_NAME;
}
if (!isset($metaDescription)) {
  $metaDescription = '';
}
if (!isset($canonicalUrl)) {
  $canonicalUrl = SITE_URL . '/thank-you.php';
}
if (!isset($profileImage)) {
  $profileImage = SITE_URL . '/media/timgabaree_profile5_900x1200.webp';
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
                'The professional website of technology executive and Portfolio CIO Tim Gabaree.',
            'inLanguage' => 'en-US',
        ],
        [
            '@type' => 'ImageObject',
            '@id' => SITE_URL . '/#primaryimage',
            'url' => $profileImage,
            'contentUrl' => $profileImage,
            'width' => 900,
            'height' => 1200,
            'encodingFormat' => 'image/webp',
            'caption' =>
                'Tim Gabaree, Portfolio CIO and technology executive',
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'description' => 'Confirmation that a message submitted through Tim Gabaree’s executive contact page has been received.',
            'isPartOf' => [
                '@id' => SITE_URL . '/#website',
            ],
            'about' => [
                '@id' => SITE_URL . '/#person',
            ],
            'inLanguage' => 'en-US',
        ],
        [
            '@type' => 'Person',
            '@id' => SITE_URL . '/#person',
            'name' => SITE_NAME,
            'givenName' => 'Tim',
            'familyName' => 'Gabaree',
            'url' => SITE_URL . '/',
            'image' => [
                '@id' => SITE_URL . '/#primaryimage',
            ],
            'jobTitle' => 'Portfolio CIO',
            'description' => 'Portfolio CIO and technology executive focused on technology value creation, governance, operating model transformation, and enterprise performance.',
            'email' => 'mailto:' . SITE_EMAIL,
            'telephone' => SITE_PHONE,
 			'sameAs' => SITE_SOCIAL_PROFILES,
        ],
    ],
];
