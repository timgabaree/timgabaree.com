<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/bootstrap.php';
require_once __DIR__ . '/form-validation.php';

/*
|--------------------------------------------------------------------------
| Contact Form Mail Service
|--------------------------------------------------------------------------
|
| Builds and sends the plain-text contact-form email.
|
| This file does not access POST data, redirect visitors, validate request
| methods, or manage submission rate limits.
|
*/

/*
|--------------------------------------------------------------------------
| Mail Header Encoding
|--------------------------------------------------------------------------
*/

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

/*
|--------------------------------------------------------------------------
| Mail Configuration Validation
|--------------------------------------------------------------------------
*/

function contactMailConfigurationIsValid(
    string $recipientEmail,
    string $senderEmail,
    string $senderName
): bool {
    if (
        filter_var(
            $recipientEmail,
            FILTER_VALIDATE_EMAIL
        ) === false
    ) {
        return false;
    }

    if (
        filter_var(
            $senderEmail,
            FILTER_VALIDATE_EMAIL
        ) === false
    ) {
        return false;
    }

    if (
        hasHeaderInjection($recipientEmail) ||
        hasHeaderInjection($senderEmail) ||
        hasHeaderInjection($senderName)
    ) {
        return false;
    }

    return true;
}

/*
|--------------------------------------------------------------------------
| Subject Construction
|--------------------------------------------------------------------------
*/

function buildContactMailSubject(
    string $topicLabel
): string {
    return encodeMailHeader(
        'TimGabaree.com: ' . $topicLabel
    );
}

/*
|--------------------------------------------------------------------------
| Message Body Construction
|--------------------------------------------------------------------------
*/

function buildContactMailBody(array $formData): string
{
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

    $organization =
        $formData['organization'] !== ''
            ? $formData['organization']
            : 'Not provided';

    $phone =
        $formData['phone'] !== ''
            ? $formData['phone']
            : 'Not provided';

    $bodyLines = [
        'A new inquiry was submitted through timgabaree.com.',
        '',
        'Name: ' . $formData['name'],
        'Organization: ' . $organization,
        'Email: ' . $formData['email'],
        'Phone: ' . $phone,
        'Topic: ' . $formData['topic_label'],
        '',
        'Message:',
        $formData['message'],
        '',
        'Submission details:',
        'Submitted: ' . $submittedAt,
        'Visitor IP: ' . $visitorIp,
        'User Agent: ' . $userAgent,
    ];

    return implode(
        "\r\n",
        $bodyLines
    );
}

/*
|--------------------------------------------------------------------------
| Mail Header Construction
|--------------------------------------------------------------------------
*/

function buildContactMailHeaders(
    string $senderEmail,
    string $senderName,
    string $replyToEmail
): array {
    $encodedSenderName = encodeMailHeader(
        $senderName
    );

    return [
        'From: ' .
            $encodedSenderName .
            ' <' .
            $senderEmail .
            '>',
        'Reply-To: ' . $replyToEmail,
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: 8bit',
        'X-Mailer: TimGabaree.com Contact Form',
    ];
}

/*
|--------------------------------------------------------------------------
| Send Contact Mail
|--------------------------------------------------------------------------
*/

function sendContactMail(
    array $formData,
    string $recipientEmail,
    string $senderEmail,
    string $senderName
): bool {
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

        return false;
    }

    $subject = buildContactMailSubject(
        $formData['topic_label']
    );

    $body = buildContactMailBody(
        $formData
    );

    $headers = buildContactMailHeaders(
        $senderEmail,
        $senderName,
        $formData['email']
    );

    return mail(
        $recipientEmail,
        $subject,
        $body,
        implode(
            "\r\n",
            $headers
        )
    );
}