<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Shared Helper Functions
|--------------------------------------------------------------------------
|
| Reusable functions for escaping output, building asset URLs, formatting
| contact information, retrieving page metadata, handling form input, and
| performing common validation and request checks.
|
*/

/*
|--------------------------------------------------------------------------
| HTML Escaping
|--------------------------------------------------------------------------
*/

/**
 * Escape a value for safe HTML output.
 */
function e(
    string|int|float|null $value
): string {
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        APP_CHARSET
    );
}

/*
|--------------------------------------------------------------------------
| Asset URLs
|--------------------------------------------------------------------------
*/

/**
 * Append an optional cache-busting version to a local asset path.
 *
 * Example:
 *
 * asset('/css/style.css', VERSION_CSS)
 *
 * Returns:
 *
 * /css/style.css?v=1.0.0
 */
function asset(
    string $path,
    string $version = ''
): string {
    $path =
        trim($path);

    if ($path === '') {
        return '';
    }

    if ($version === '') {
        return $path;
    }

    $separator =
        str_contains($path, '?')
            ? '&'
            : '?';

    return $path .
        $separator .
        'v=' .
        rawurlencode($version);
}

/**
 * Convert a local site path into an absolute URL.
 */
function absoluteUrl(
    string $path = '/'
): string {
    $path =
        trim($path);

    if (
        $path === '' ||
        $path === '/'
    ) {
        return rtrim(
            SITE_URL,
            '/'
        ) . '/';
    }

    if (
        str_starts_with(
            $path,
            'https://'
        ) ||
        str_starts_with(
            $path,
            'http://'
        )
    ) {
        return $path;
    }

    return rtrim(
        SITE_URL,
        '/'
    ) .
        '/' .
        ltrim(
            $path,
            '/'
        );
}

/*
|--------------------------------------------------------------------------
| Page Metadata
|--------------------------------------------------------------------------
*/

/**
 * Return the metadata configuration for a public page.
 *
 * @return array{
 *     published: string,
 *     modified: string
 * }
 */
function pageMetadata(
    string $page
): array {
    $page =
        trim($page);

    $defaultMetadata = [
        'published' =>
            SITE_RELEASE_DATE,

        'modified' =>
            SITE_RELEASE_DATE,
    ];

    if (
        $page === '' ||
        !isset(PAGE_METADATA[$page]) ||
        !is_array(PAGE_METADATA[$page])
    ) {
        return $defaultMetadata;
    }

    $metadata =
        PAGE_METADATA[$page];

    $published =
        $metadata['published'] ??
        SITE_RELEASE_DATE;

    $modified =
        $metadata['modified'] ??
        $published;

    if (
        !is_string($published) ||
        $published === ''
    ) {
        $published =
            SITE_RELEASE_DATE;
    }

    if (
        !is_string($modified) ||
        $modified === ''
    ) {
        $modified =
            $published;
    }

    return [
        'published' =>
            $published,

        'modified' =>
            $modified,
    ];
}

/**
 * Return the publication date for a public page.
 */
function pagePublished(
    string $page
): string {
    $metadata =
        pageMetadata($page);

    return $metadata['published'];
}

/**
 * Return the last meaningful modification date for a public page.
 */
function pageModified(
    string $page
): string {
    $metadata =
        pageMetadata($page);

    return $metadata['modified'];
}

/*
|--------------------------------------------------------------------------
| Phone Formatting
|--------------------------------------------------------------------------
*/

/**
 * Convert a telephone number into a tel-link-safe value.
 *
 * Example:
 *
 * +1-773-609-0697
 */
function phoneHref(
    string $phone
): string {
    $phone =
        trim($phone);

    if ($phone === '') {
        return '';
    }

    $hasLeadingPlus =
        str_starts_with(
            $phone,
            '+'
        );

    $digits =
        preg_replace(
            '/\D+/',
            '',
            $phone
        );

    if (
        !is_string($digits) ||
        $digits === ''
    ) {
        return '';
    }

    return $hasLeadingPlus
        ? '+' . $digits
        : $digits;
}

/**
 * Format a North American telephone number for display.
 *
 * Example:
 *
 * +1-773-609-0697 becomes 773.609.0697
 */
function phoneDisplay(
    string $phone
): string {
    $digits =
        preg_replace(
            '/\D+/',
            '',
            $phone
        );

    if (!is_string($digits)) {
        return trim($phone);
    }

    if (
        strlen($digits) === 11 &&
        str_starts_with(
            $digits,
            '1'
        )
    ) {
        $digits =
            substr(
                $digits,
                1
            );
    }

    if (strlen($digits) === 10) {
        return substr(
            $digits,
            0,
            3
        ) .
            '.' .
            substr(
                $digits,
                3,
                3
            ) .
            '.' .
            substr(
                $digits,
                6,
                4
            );
    }

    return trim($phone);
}

/*
|--------------------------------------------------------------------------
| Copyright
|--------------------------------------------------------------------------
*/

/**
 * Return the current copyright year or year range.
 */
function copyrightYears(
    int $startYear = SITE_COPYRIGHT_START_YEAR
): string {
    $currentYear =
        (int) date('Y');

    if ($startYear >= $currentYear) {
        return (string) $currentYear;
    }

    return $startYear .
        '–' .
        $currentYear;
}

/**
 * Return the complete copyright notice.
 */
function copyrightNotice(): string
{
    return 'Copyright © ' .
        copyrightYears() .
        ' ' .
        SITE_COPYRIGHT_OWNER .
        '. All Rights Reserved.';
}

/*
|--------------------------------------------------------------------------
| Request Helpers
|--------------------------------------------------------------------------
*/

/**
 * Return the current request method.
 */
function requestMethod(): string
{
    $method =
        $_SERVER['REQUEST_METHOD'] ??
        '';

    return is_string($method)
        ? strtoupper($method)
        : '';
}

/**
 * Determine whether the current request uses HTTPS.
 */
function requestIsHttps(): bool
{
    $https =
        $_SERVER['HTTPS'] ??
        '';

    if (
        is_string($https) &&
        $https !== '' &&
        strtolower($https) !== 'off'
    ) {
        return true;
    }

    $forwardedProto =
        $_SERVER['HTTP_X_FORWARDED_PROTO'] ??
        '';

    return is_string($forwardedProto) &&
        strtolower($forwardedProto) ===
            'https';
}

/**
 * Return the current request host.
 */
function requestHost(): string
{
    $host =
        $_SERVER['HTTP_HOST'] ??
        '';

    return is_string($host)
        ? strtolower(
            trim($host)
        )
        : '';
}

/**
 * Determine whether the request appears to originate from this site.
 *
 * This is a supplemental check and does not replace CSRF validation.
 */
function requestAppearsSameSite(): bool
{
    $siteHost =
        parse_url(
            SITE_URL,
            PHP_URL_HOST
        );

    if (
        !is_string($siteHost) ||
        $siteHost === ''
    ) {
        return false;
    }

    $siteHost =
        strtolower($siteHost);

    $origin =
        $_SERVER['HTTP_ORIGIN'] ??
        '';

    if (
        is_string($origin) &&
        $origin !== ''
    ) {
        $originHost =
            parse_url(
                $origin,
                PHP_URL_HOST
            );

        return is_string($originHost) &&
            strtolower($originHost) ===
                $siteHost;
    }

    $referer =
        $_SERVER['HTTP_REFERER'] ??
        '';

    if (
        is_string($referer) &&
        $referer !== ''
    ) {
        $refererHost =
            parse_url(
                $referer,
                PHP_URL_HOST
            );

        return is_string($refererHost) &&
            strtolower($refererHost) ===
                $siteHost;
    }

    /*
     * Some privacy tools omit both Origin and Referer.
     * Allow the request to continue so CSRF validation can perform
     * the primary verification.
     */
    return true;
}

/*
|--------------------------------------------------------------------------
| Form Input
|--------------------------------------------------------------------------
*/

/**
 * Return a POST field as a trimmed string.
 */
function postString(
    string $key
): string {
    if (
        !isset($_POST[$key]) ||
        !is_string($_POST[$key])
    ) {
        return '';
    }

    return trim(
        $_POST[$key]
    );
}

/**
 * Return a GET field as a trimmed string.
 */
function queryString(
    string $key
): string {
    if (
        !isset($_GET[$key]) ||
        !is_string($_GET[$key])
    ) {
        return '';
    }

    return trim(
        $_GET[$key]
    );
}

/**
 * Normalize line endings and trim submitted text.
 */
function normalizeSubmittedText(
    string $value
): string {
    $value =
        str_replace(
            [
                "\r\n",
                "\r",
            ],
            "\n",
            $value
        );

    return trim($value);
}

/**
 * Remove control characters that should not appear in ordinary form data.
 */
function removeControlCharacters(
    string $value
): string {
    $cleaned =
        preg_replace(
            '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u',
            '',
            $value
        );

    return is_string($cleaned)
        ? $cleaned
        : '';
}

/**
 * Normalize a single-line form value.
 */
function normalizeSingleLineInput(
    string $value
): string {
    $value =
        removeControlCharacters(
            $value
        );

    $value =
        preg_replace(
            '/\s+/u',
            ' ',
            $value
        );

    return is_string($value)
        ? trim($value)
        : '';
}

/**
 * Normalize a multiline form value.
 */
function normalizeMultilineInput(
    string $value
): string {
    $value =
        normalizeSubmittedText(
            $value
        );

    return removeControlCharacters(
        $value
    );
}

/*
|--------------------------------------------------------------------------
| Log Value Sanitization
|--------------------------------------------------------------------------
*/

/**
 * Normalize and truncate a value before including it in logs or
 * diagnostic messages.
 */
function sanitizeLogValue(
    string $value,
    int $maximumLength
): string {
    $value =
        normalizeSingleLineInput(
            $value
        );

    if (
        $maximumLength <= 0
    ) {
        return '';
    }

    if (
        !textExceedsLength(
            $value,
            $maximumLength
        )
    ) {
        return $value;
    }

    if (
        function_exists(
            'mb_substr'
        )
    ) {
        return mb_substr(
            $value,
            0,
            $maximumLength,
            APP_CHARSET
        );
    }

    return substr(
        $value,
        0,
        $maximumLength
    );
}

/*
|--------------------------------------------------------------------------
| Validation Helpers
|--------------------------------------------------------------------------
*/

/**
 * Determine whether text exceeds the specified character limit.
 */
function textExceedsLength(
    string $value,
    int $maximumLength
): bool {
    if ($maximumLength < 0) {
        return true;
    }

    if (function_exists('mb_strlen')) {
        return mb_strlen(
            $value,
            APP_CHARSET
        ) > $maximumLength;
    }

    return strlen($value) >
        $maximumLength;
}

/**
 * Determine whether an email address is valid.
 */
function emailIsValid(
    string $email
): bool {
    if ($email === '') {
        return false;
    }

    return filter_var(
        $email,
        FILTER_VALIDATE_EMAIL
    ) !== false;
}

/**
 * Detect carriage returns or line feeds used in header-injection attempts.
 */
function containsHeaderInjection(
    string $value
): bool {
    return str_contains(
        $value,
        "\r"
    ) ||
        str_contains(
            $value,
            "\n"
        );
}

/*
|--------------------------------------------------------------------------
| Redirects
|--------------------------------------------------------------------------
*/

/**
 * Redirect using a 303 See Other response.
 */
function redirectTo(
    string $location,
    int $statusCode = HTTP_STATUS_SEE_OTHER
): never {
    header(
        'Location: ' . $location,
        true,
        $statusCode
    );

    exit;
}

/*
|--------------------------------------------------------------------------
| JSON Encoding
|--------------------------------------------------------------------------
*/

/**
 * Encode structured data safely for inclusion in HTML.
 *
 * @param array<string, mixed> $data
 */
function jsonForHtml(
    array $data
): string {
    return json_encode(
        $data,
        JSON_UNESCAPED_SLASHES |
        JSON_UNESCAPED_UNICODE |
        JSON_HEX_TAG |
        JSON_HEX_AMP |
        JSON_HEX_APOS |
        JSON_HEX_QUOT |
        JSON_THROW_ON_ERROR
    );
}

/*
|--------------------------------------------------------------------------
| Arrays
|--------------------------------------------------------------------------
*/

/**
 * Determine whether an array is associative.
 *
 * @param array<mixed> $array
 */
function arrayIsAssociative(
    array $array
): bool {
    if ($array === []) {
        return false;
    }

    return array_keys($array) !==
        range(
            0,
            count($array) - 1
        );
}