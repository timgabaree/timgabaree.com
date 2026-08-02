<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';
require_once __DIR__ . '/includes/contact-topics.php';

/*
|--------------------------------------------------------------------------
| Tim Gabaree Contact Form Handler
|--------------------------------------------------------------------------
|
| File: /hello-submit.php
|
| Successful submissions redirect to:
| https://timgabaree.com/thank-you.php
|
*/

/*
|--------------------------------------------------------------------------
| Security-Related Response Headers
|--------------------------------------------------------------------------
*/

header(
    'Cache-Control: no-store, no-cache, must-revalidate, max-age=0'
);

header('Pragma: no-cache');
header('X-Content-Type-Options: nosniff');

/*
|--------------------------------------------------------------------------
| Configuration
|--------------------------------------------------------------------------
*/

$recipientEmail = SITE_FORM_EMAIL;
$senderEmail = SITE_FORM_EMAIL;
$senderName = SITE_NAME . ' Website';

$helloUrl = '/hello.php';
$thankYouUrl = '/thank-you.php';

/* Approximately 50 KB */
$maximumRequestBytes = 51200;

/* Basic per-session rate limit */
$minimumSecondsBetweenSubmissions = 15;

/*
|--------------------------------------------------------------------------
| Helper Functions
|--------------------------------------------------------------------------
*/

function redirectTo(string $location): void
{
    header('Location: ' . $location, true, 303);
    exit;
}

/*
 * Return only string POST values.
 * This prevents unexpected arrays such as name[]=value.
 */
function postString(string $field): string
{
    $value = $_POST[$field] ?? '';

    return is_string($value) ? $value : '';
}

function cleanSingleLine(string $value): string
{
    $value = strip_tags($value);

    /*
     * Convert line breaks, tabs, and repeated spaces
     * into a single ordinary space.
     */
    $value =
        preg_replace('/[\r\n\t]+/u', ' ', $value) ?? '';

    $value =
        preg_replace('/[ ]{2,}/u', ' ', $value) ?? '';

    return trim($value);
}

function cleanMultiline(string $value): string
{
    $value = strip_tags($value);

    /* Normalize line endings */
    $value = str_replace(
        ["\r\n", "\r"],
        "\n",
        $value
    );

    /*
     * Remove control characters while preserving
     * tabs and line breaks.
     */
    $value =
        preg_replace(
            '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u',
            '',
            $value
        ) ?? '';

    /* Remove trailing spaces */
    $value =
        preg_replace('/[ \t]+$/m', '', $value) ?? '';

    /* Limit excessive blank lines */
    $value =
        preg_replace("/\n{4,}/", "\n\n\n", $value) ?? '';

    return trim($value);
}

function hasHeaderInjection(string $value): bool
{
    return preg_match('/[\r\n]/', $value) === 1;
}

function safeLength(string $value): int
{
    if (function_exists('mb_strlen')) {
        return mb_strlen($value, 'UTF-8');
    }

    return strlen($value);
}

function encodeMailHeader(string $value): string
{
    if (function_exists('mb_encode_mimeheader')) {
        return mb_encode_mimeheader(
            $value,
            'UTF-8',
            'B',
            "\r\n"
        );
    }

    return $value;
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

    return substr($value, 0, $maximumLength);
}

/*
 * Origin and Referer are useful secondary signals.
 * Their absence does not cause rejection because some
 * browsers and privacy tools omit them.
 */
function requestAppearsSameSite(): bool
{
    $allowedHosts = [
        'timgabaree.com',
        'www.timgabaree.com',
    ];

    $origin = $_SERVER['HTTP_ORIGIN'] ?? '';

    if (is_string($origin) && $origin !== '') {
        $originHost = parse_url(
            $origin,
            PHP_URL_HOST
        );

        if (
            !is_string($originHost) ||
            !in_array(
                strtolower($originHost),
                $allowedHosts,
                true
            )
        ) {
            return false;
        }
    }

    $referer = $_SERVER['HTTP_REFERER'] ?? '';

    if (is_string($referer) && $referer !== '') {
        $refererHost = parse_url(
            $referer,
            PHP_URL_HOST
        );

        if (
            !is_string($refererHost) ||
            !in_array(
                strtolower($refererHost),
                $allowedHosts,
                true
            )
        ) {
            return false;
        }
    }

    return true;
}

/*
|--------------------------------------------------------------------------
| Validate Server-Side Email Configuration
|--------------------------------------------------------------------------
*/

if (
    filter_var(
        $recipientEmail,
        FILTER_VALIDATE_EMAIL
    ) === false ||
    filter_var(
        $senderEmail,
        FILTER_VALIDATE_EMAIL
    ) === false ||
    hasHeaderInjection($recipientEmail) ||
    hasHeaderInjection($senderEmail) ||
    hasHeaderInjection($senderName)
) {
    error_log(
        'Tim Gabaree contact form: invalid mail configuration.'
    );

    redirectTo(
        $helloUrl . '?status=send-error'
    );
}

/*
|--------------------------------------------------------------------------
| Accept POST Requests Only
|--------------------------------------------------------------------------
*/

$requestMethod =
    $_SERVER['REQUEST_METHOD'] ?? '';

if ($requestMethod !== 'POST') {
    redirectTo($helloUrl);
}

/*
|--------------------------------------------------------------------------
| Basic Same-Site Request Check
|--------------------------------------------------------------------------
*/

if (!requestAppearsSameSite()) {
    error_log(
        'Tim Gabaree contact form: rejected cross-site submission.'
    );

    redirectTo(
        $helloUrl . '?status=invalid'
    );
}

/*
|--------------------------------------------------------------------------
| Request-Size Protection
|--------------------------------------------------------------------------
*/

$contentLength =
    isset($_SERVER['CONTENT_LENGTH'])
        ? (int) $_SERVER['CONTENT_LENGTH']
        : 0;

if (
    $contentLength < 0 ||
    $contentLength > $maximumRequestBytes
) {
    redirectTo(
        $helloUrl . '?status=invalid'
    );
}

/*
|--------------------------------------------------------------------------
| Session-Based Rate Limiting
|--------------------------------------------------------------------------
*/

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start([
        'cookie_httponly' => true,
        'cookie_secure' => true,
        'cookie_samesite' => 'Lax',
        'use_strict_mode' => true,
    ]);
}

$currentTime = time();

$lastSubmissionTime =
    isset($_SESSION['last_contact_submission'])
        ? (int) $_SESSION['last_contact_submission']
        : 0;

if (
    $lastSubmissionTime > 0 &&
    ($currentTime - $lastSubmissionTime) <
        $minimumSecondsBetweenSubmissions
) {
    redirectTo(
        $helloUrl . '?status=invalid'
    );
}

/*
|--------------------------------------------------------------------------
| Honeypot Spam Protection
|--------------------------------------------------------------------------
*/

$honeypot = trim(
    postString('website')
);

if ($honeypot !== '') {
    /*
     * Quietly appear successful so automated submissions
     * do not learn how the form detected them.
     */
    $_SESSION['last_contact_submission'] =
        $currentTime;

    redirectTo($thankYouUrl);
}

/*
|--------------------------------------------------------------------------
| Retrieve and Clean Form Fields
|--------------------------------------------------------------------------
*/

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
|--------------------------------------------------------------------------
| Validate Required Fields
|--------------------------------------------------------------------------
*/

if (
    $name === '' ||
    $emailRaw === '' ||
    $topic === '' ||
    $message === ''
) {
    redirectTo(
        $helloUrl . '?status=missing'
    );
}

/*
|--------------------------------------------------------------------------
| Enforce Reasonable Field Lengths
|--------------------------------------------------------------------------
*/

if (
    safeLength($name) > 100 ||
    safeLength($organization) > 150 ||
    safeLength($emailRaw) > 254 ||
    safeLength($phone) > 40 ||
    safeLength($topic) > 75 ||
    safeLength($message) > 5000
) {
    redirectTo(
        $helloUrl . '?status=invalid'
    );
}

/*
|--------------------------------------------------------------------------
| Validate Visitor Email
|--------------------------------------------------------------------------
*/

if (
    hasHeaderInjection($emailRaw) ||
    filter_var(
        $emailRaw,
        FILTER_VALIDATE_EMAIL
    ) === false
) {
    redirectTo(
        $helloUrl . '?status=invalid-email'
    );
}

$email = $emailRaw;

/*
|--------------------------------------------------------------------------
| Validate Topic and Resolve Readable Label
|--------------------------------------------------------------------------
*/

if (
    !array_key_exists(
        $topic,
        $contactTopics
    )
) {
    redirectTo(
        $helloUrl . '?status=invalid'
    );
}

$topicLabel = $contactTopics[$topic];

/*
|--------------------------------------------------------------------------
| Construct Email Subject
|--------------------------------------------------------------------------
|
| The topic label is safe to include because it comes
| from the controlled server-side topic map.
|
*/

$subject = encodeMailHeader(
    'TimGabaree.com: ' . $topicLabel
);

/*
|--------------------------------------------------------------------------
| Construct Plain-Text Message Body
|--------------------------------------------------------------------------
*/

$submittedAt = date(
    'F j, Y \a\t g:i:s A T'
);

$visitorIp = sanitizeLogValue(
    (string) (
        $_SERVER['REMOTE_ADDR'] ??
        'Unavailable'
    ),
    45
);

$userAgent = sanitizeLogValue(
    (string) (
        $_SERVER['HTTP_USER_AGENT'] ??
        'Unavailable'
    ),
    500
);

$bodyLines = [
    'A new inquiry was submitted through timgabaree.com.',
    '',
    'Name: ' . $name,
    'Organization: ' .
        (
            $organization !== ''
                ? $organization
                : 'Not provided'
        ),
    'Email: ' . $email,
    'Phone: ' .
        (
            $phone !== ''
                ? $phone
                : 'Not provided'
        ),
    'Topic: ' . $topicLabel,
    '',
    'Message:',
    $message,
    '',
    'Submission details:',
    'Submitted: ' . $submittedAt,
    'Visitor IP: ' . $visitorIp,
    'User Agent: ' . $userAgent,
];

$body = implode(
    "\r\n",
    $bodyLines
);

/*
|--------------------------------------------------------------------------
| Construct Controlled Email Headers
|--------------------------------------------------------------------------
*/

$encodedSenderName = encodeMailHeader(
    $senderName
);

$headers = [
    'From: ' .
        $encodedSenderName .
        ' <' .
        $senderEmail .
        '>',
    'Reply-To: ' . $email,
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'Content-Transfer-Encoding: 8bit',
    'X-Mailer: TimGabaree.com Contact Form',
];

/*
|--------------------------------------------------------------------------
| Send Through GoDaddy Local Mail Service
|--------------------------------------------------------------------------
*/

$mailSent = mail(
    $recipientEmail,
    $subject,
    $body,
    implode(
        "\r\n",
        $headers
    )
);

if ($mailSent) {
    $_SESSION['last_contact_submission'] =
        $currentTime;

    redirectTo($thankYouUrl);
}

/*
 * Do not reveal PHP or mail-server details to visitors.
 */
error_log(
    'Tim Gabaree contact form: mail() returned false.'
);

redirectTo(
    $helloUrl . '?status=send-error'
);