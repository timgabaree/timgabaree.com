<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Contact Form Validation
|--------------------------------------------------------------------------
|
| Provides input sanitization, request checks, and contact-form
| validation. This file does not send mail, manage redirects, or record
| submission rate limits.
|
*/

/*
|--------------------------------------------------------------------------
| Input Cleaning
|--------------------------------------------------------------------------
*/

function cleanSingleLine(string $value): string
{
    $value = strip_tags($value);

    /*
     * Convert line breaks and tabs into spaces.
     */
    $value =
        preg_replace(
            '/[\r\n\t]+/u',
            ' ',
            $value
        ) ?? '';

    /*
     * Collapse repeated ordinary spaces.
     */
    $value =
        preg_replace(
            '/[ ]{2,}/u',
            ' ',
            $value
        ) ?? '';

    return trim($value);
}

function cleanMultiline(string $value): string
{
    $value = strip_tags($value);

    /*
     * Normalize line endings.
     */
    $value = str_replace(
        ["\r\n", "\r"],
        "\n",
        $value
    );

    /*
     * Remove control characters while preserving tabs
     * and line breaks.
     */
    $value =
        preg_replace(
            '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u',
            '',
            $value
        ) ?? '';

    /*
     * Remove trailing spaces from each line.
     */
    $value =
        preg_replace(
            '/[ \t]+$/m',
            '',
            $value
        ) ?? '';

    /*
     * Limit excessive blank lines.
     */
    $value =
        preg_replace(
            "/\n{4,}/",
            "\n\n\n",
            $value
        ) ?? '';

    return trim($value);
}

/*
|--------------------------------------------------------------------------
| General Validation Helpers
|--------------------------------------------------------------------------
*/

function hasHeaderInjection(string $value): bool
{
    return preg_match(
        '/[\r\n]/',
        $value
    ) === 1;
}

function safeLength(string $value): int
{
    if (function_exists('mb_strlen')) {
        return mb_strlen(
            $value,
            'UTF-8'
        );
    }

    return strlen($value);
}

function sanitizeLogValue(
    string $value,
    int $maximumLength
): string {
    $value = cleanSingleLine($value);

    if (safeLength($value) <= $maximumLength) {
        return $value;
    }

    if (function_exists('mb_substr')) {
        return mb_substr(
            $value,
            0,
            $maximumLength,
            'UTF-8'
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
| Contact Form Validation
|--------------------------------------------------------------------------
|
| Returns:
|
| [
|     'is_valid' => bool,
|     'status'    => string,
|     'data'      => array
| ]
|
| The status value corresponds to the query parameter used when sending
| the visitor back to contact.php.
|
*/

function validateContactForm(array $contactTopics): array
{
    $name = cleanSingleLine(
        postString('name')
    );

    $organization = cleanSingleLine(
        postString('organization')
    );

    $emailRaw = trim(
        postString('email')
    );

    $phone = cleanSingleLine(
        postString('phone')
    );

    $topic = cleanSingleLine(
        postString('topic')
    );

    $message = cleanMultiline(
        postString('message')
    );

    /*
     * Validate required values.
     */
    if (
        $name === '' ||
        $emailRaw === '' ||
        $topic === '' ||
        $message === ''
    ) {
        return [
            'is_valid' => false,
            'status' => 'missing',
            'data' => [],
        ];
    }

    /*
     * Enforce reasonable maximum lengths.
     */
    if (
        safeLength($name) > 100 ||
        safeLength($organization) > 150 ||
        safeLength($emailRaw) > 254 ||
        safeLength($phone) > 40 ||
        safeLength($topic) > 75 ||
        safeLength($message) > 5000
    ) {
        return [
            'is_valid' => false,
            'status' => 'invalid',
            'data' => [],
        ];
    }

    /*
     * Validate the visitor's email address.
     */
    if (
        hasHeaderInjection($emailRaw) ||
        filter_var(
            $emailRaw,
            FILTER_VALIDATE_EMAIL
        ) === false
    ) {
        return [
            'is_valid' => false,
            'status' => 'invalid-email',
            'data' => [],
        ];
    }

    /*
     * Validate the selected topic against the controlled
     * server-side topic map.
     */
    if (
        !array_key_exists(
            $topic,
            $contactTopics
        )
    ) {
        return [
            'is_valid' => false,
            'status' => 'invalid',
            'data' => [],
        ];
    }

    $topicLabel = $contactTopics[$topic];

    if (!is_string($topicLabel)) {
        return [
            'is_valid' => false,
            'status' => 'invalid',
            'data' => [],
        ];
    }

    return [
        'is_valid' => true,
        'status' => '',
        'data' => [
            'name' => $name,
            'organization' => $organization,
            'email' => $emailRaw,
            'phone' => $phone,
            'topic' => $topic,
            'topic_label' => $topicLabel,
            'message' => $message,
        ],
    ];
}