<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Sitemap Generator
|--------------------------------------------------------------------------
|
| Generates the root sitemap.xml from canonical application data:
|
| - SITEMAP_PAGES defines public page inclusion and image associations.
| - PAGE_CONFIG supplies canonical URLs and meaningful modification dates.
| - SITE_IMAGES supplies managed image paths and roles.
|
| Run from the project root:
|
| php scripts/generate-sitemap.php
|
*/

require_once dirname(__DIR__) .
    '/includes/bootstrap.php';

require_once dirname(__DIR__) .
    '/includes/sitemap/sitemap.php';

/*
|--------------------------------------------------------------------------
| XML Escaping
|--------------------------------------------------------------------------
|
| Escape a value for XML text content.
|
*/

function sitemapXmlEscape(
    string $value
): string {
    return htmlspecialchars(
        $value,
        ENT_XML1 |
        ENT_QUOTES |
        ENT_SUBSTITUTE,
        'UTF-8'
    );
}

/*
|--------------------------------------------------------------------------
| Validate Sitemap Configuration
|--------------------------------------------------------------------------
*/

if (
    !defined('SITEMAP_PAGES') ||
    !is_array(SITEMAP_PAGES) ||
    SITEMAP_PAGES === []
) {
    throw new RuntimeException(
        'SITEMAP_PAGES must contain at least one public page.'
    );
}

/*
|--------------------------------------------------------------------------
| Build Sitemap
|--------------------------------------------------------------------------
*/

$lines = [
    '<?xml version="1.0" encoding="UTF-8"?>',
    '<?xml-stylesheet type="text/xsl" href="/sitemap.xsl"?>',
    '',
    '<urlset',
    '    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"',
    '    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">',
];

foreach (
    SITEMAP_PAGES as $pageKey => $pageConfig
) {
    if (
        !is_string($pageKey) ||
        trim($pageKey) === ''
    ) {
        throw new RuntimeException(
            'Sitemap page keys must be non-empty strings.'
        );
    }

    if (!is_array($pageConfig)) {
        throw new RuntimeException(
            'Invalid sitemap configuration for page: ' .
            $pageKey
        );
    }

    $publicPageConfig =
        pageConfig(
            $pageKey
        );

    if ($publicPageConfig === []) {
        throw new RuntimeException(
            'Missing PAGE_CONFIG entry for sitemap page: ' .
            $pageKey
        );
    }

    $pageUrl =
        $publicPageConfig['canonical_url'] ??
        '';

    if (
        !is_string($pageUrl) ||
        filter_var(
            $pageUrl,
            FILTER_VALIDATE_URL
        ) === false
    ) {
        throw new RuntimeException(
            'Invalid canonical URL for sitemap page: ' .
            $pageKey
        );
    }

    if (
        !isset($publicPageConfig['modified']) ||
        !is_string($publicPageConfig['modified']) ||
        $publicPageConfig['modified'] === ''
    ) {
        throw new RuntimeException(
            'Missing modification date for sitemap page: ' .
            $pageKey
        );
    }

    $pageModified =
        pageModified(
            $pageKey
        );

    if (
        preg_match(
            '/^\d{4}-\d{2}-\d{2}$/',
            $pageModified
        ) !== 1
    ) {
        throw new RuntimeException(
            'Invalid modification date for sitemap page: ' .
            $pageKey
        );
    }

    $imageKeys =
        $pageConfig['images'] ??
        [];

    if (!is_array($imageKeys)) {
        throw new RuntimeException(
            'Invalid sitemap image list for page: ' .
            $pageKey
        );
    }

    $lines[] = '';
    $lines[] =
        '  <!-- ' .
        sitemapXmlEscape(
            ucfirst(
                str_replace(
                    '-',
                    ' ',
                    $pageKey
                )
            )
        ) .
        ' -->';

    $lines[] =
        '  <url>';

    $lines[] =
        '    <loc>' .
        sitemapXmlEscape(
            $pageUrl
        ) .
        '</loc>';

    $lines[] =
        '    <lastmod>' .
        sitemapXmlEscape(
            $pageModified
        ) .
        '</lastmod>';

    foreach ($imageKeys as $imageKey) {
        if (
            !is_string($imageKey) ||
            trim($imageKey) === ''
        ) {
            throw new RuntimeException(
                'Invalid image key for sitemap page: ' .
                $pageKey
            );
        }

        $image =
            getSiteImage(
                $imageKey
            );

        if ($image === []) {
            throw new RuntimeException(
                'Unknown sitemap image key: ' .
                $imageKey
            );
        }

        $roles =
            $image['roles'] ??
            [];

        if (
            !is_array($roles) ||
            !in_array(
                'sitemap',
                $roles,
                true
            )
        ) {
            throw new RuntimeException(
                'Image is not approved for sitemap use: ' .
                $imageKey
            );
        }

        $imageUrl =
            $image['url'] ??
            '';

        if (
            !is_string($imageUrl) ||
            filter_var(
                $imageUrl,
                FILTER_VALIDATE_URL
            ) === false
        ) {
            throw new RuntimeException(
                'Invalid sitemap image URL: ' .
                $imageKey
            );
        }

        $lines[] = '';
        $lines[] =
            '    <image:image>';

        $lines[] =
            '      <image:loc>' .
            sitemapXmlEscape(
                $imageUrl
            ) .
            '</image:loc>';

        $lines[] =
            '    </image:image>';
    }

    $lines[] =
        '  </url>';
}

$lines[] = '';
$lines[] =
    '</urlset>';

$lines[] =
    '';

$sitemapXml =
    implode(
        PHP_EOL,
        $lines
    );

/*
|--------------------------------------------------------------------------
| Write Sitemap
|--------------------------------------------------------------------------
*/

$sitemapPath =
    dirname(__DIR__) .
    '/sitemap.xml';

$result =
    file_put_contents(
        $sitemapPath,
        $sitemapXml,
        LOCK_EX
    );

if ($result === false) {
    throw new RuntimeException(
        'Unable to write sitemap.xml.'
    );
}

/*
|--------------------------------------------------------------------------
| Completion
|--------------------------------------------------------------------------
*/

printf(
    "Generated sitemap.xml (%d bytes)%s",
    $result,
    PHP_EOL
);
