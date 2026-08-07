<?php

declare(strict_types=1);

require_once dirname(__DIR__) .
    '/bootstrap.php';

require_once __DIR__ .
    '/form-contact-topics.php';

require_once __DIR__ .
    '/form-validation.php';

require_once __DIR__ .
    '/form-mail.php';

require_once dirname(__DIR__) .
    '/security/security-csrf.php';

require_once dirname(__DIR__) .
    '/security/security-rate-limit.php';

/*
|--------------------------------------------------------------------------
| Tim Gabaree Contact Form Handler
|--------------------------------------------------------------------------
|
| Protected handler:
| /includes/forms/form-contact-handler.php
|
| Public endpoint:
| /contact-submit.php
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

$recipientEmail =
    SITE_FORM_EMAIL;

$senderEmail =
    SITE_FORM_EMAIL;

$senderName =
    SITE_NAME . ' Website';

$contactUrl =
    '/contact.php';

$thankYouUrl =
    '/thank-you.php';

$thankYouConversionUrl =
    '/thank-you.php?submitted=1';

/* Approximately 50 KB */
$maximumRequestBytes =
    51200;

/* Minimum time between submissions in the same session */
$minimumSecondsBetweenSubmissions =
    15;

$rateLimitAction =
    'contact_form_submission';

/*
|--------------------------------------------------------------------------
| Accept POST Requests Only
|--------------------------------------------------------------------------
*/

$requestMethod =
    $_SERVER['REQUEST_METHOD'] ?? '';

if ($requestMethod !== 'POST') {
    redirectTo($contactUrl);
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
        $contactUrl . '?status=invalid'
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
        $contactUrl . '?status=invalid'
    );
}

/*
|--------------------------------------------------------------------------
| Session-Based Rate Limiting
|--------------------------------------------------------------------------
*/

if (
    !rateLimitAllows(
        $rateLimitAction,
        $minimumSecondsBetweenSubmissions
    )
) {
    redirectTo(
        $contactUrl . '?status=rate-limited'
    );
}

/*
|--------------------------------------------------------------------------
| Honeypot Spam Protection
|--------------------------------------------------------------------------
*/

$honeypot =
    trim(
        postString('website')
    );

if ($honeypot !== '') {
    /*
     * Quietly appear successful so automated submissions do not learn
     * that the honeypot caught them.
     *
     * The ordinary thank-you URL is used so a false analytics conversion
     * is not recorded.
     */
    rateLimitRecord(
        $rateLimitAction
    );

    redirectTo($thankYouUrl);
}

/*
|--------------------------------------------------------------------------
| CSRF Validation
|--------------------------------------------------------------------------
*/

$submittedCsrfToken =
    postString('csrf_token');

if (
    !csrfIsValid(
        $submittedCsrfToken
    )
) {
    error_log(
        'Tim Gabaree contact form: invalid CSRF token.'
    );

    redirectTo(
        $contactUrl . '?status=security-error'
    );
}

/*
|--------------------------------------------------------------------------
| Validate Contact Form
|--------------------------------------------------------------------------
*/

$validationResult =
    validateContactForm(
        $contactTopics
    );

$isValid =
    $validationResult['is_valid'] ?? false;

if ($isValid !== true) {
    $status =
        $validationResult['status'] ?? 'invalid';

    if (!is_string($status) || $status === '') {
        $status = 'invalid';
    }

    redirectTo(
        $contactUrl .
        '?status=' .
        rawurlencode($status)
    );
}

$formData =
    $validationResult['data'] ?? [];

if (!is_array($formData)) {
    redirectTo(
        $contactUrl . '?status=invalid'
    );
}

/*
|--------------------------------------------------------------------------
| Validate Mail Configuration
|--------------------------------------------------------------------------
*/

if (
    !contactMailConfigurationIsValid(
        $recipientEmail,
        $senderEmail,
        $senderName
    )
) {
    error_log(
        'Tim Gabaree contact form: invalid mail configuration.'
    );

    redirectTo(
        $contactUrl . '?status=send-error'
    );
}

/*
|--------------------------------------------------------------------------
| Send Contact Email
|--------------------------------------------------------------------------
*/

$mailSent =
    sendContactMail(
        $formData,
        $recipientEmail,
        $senderEmail,
        $senderName
    );

if ($mailSent) {
    /*
     * Record the successful request and invalidate the used CSRF token.
     */
    rateLimitRecord(
        $rateLimitAction
    );

    csrfRotateToken();

    redirectTo(
        $thankYouConversionUrl
    );
}

/*
|--------------------------------------------------------------------------
| Mail Failure
|--------------------------------------------------------------------------
|
| Do not reveal PHP or mail-server details to visitors.
|
*/

error_log(
    'Tim Gabaree contact form: mail() returned false.'
);

redirectTo(
    $contactUrl . '?status=send-error'
);