<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Cross-Site Request Forgery Protection
|--------------------------------------------------------------------------
|
| Generates, stores, validates, and rotates CSRF tokens for public forms.
|
| During the framework transition, this file can safely initialize the
| session itself. Once bootstrap.php starts the session globally, the
| session initialization function simply returns without changing it.
|
*/

/*
|--------------------------------------------------------------------------
| Secure Session Initialization
|--------------------------------------------------------------------------
*/

function csrfStartSession(): void
{
    if (
        session_status() ===
        PHP_SESSION_ACTIVE
    ) {
        return;
    }

    session_set_cookie_params([
        'lifetime' =>
            0,

        'path' =>
            '/',

        'secure' =>
            SESSION_COOKIE_SECURE,

        'httponly' =>
            SESSION_COOKIE_HTTP_ONLY,

        'samesite' =>
            SESSION_COOKIE_SAME_SITE,
    ]);

    session_start([
        'use_strict_mode' =>
            true,
    ]);
}

/*
|--------------------------------------------------------------------------
| Generate or Retrieve CSRF Token
|--------------------------------------------------------------------------
*/

/**
 * Return the current CSRF token.
 *
 * Generates one if a valid token does not already exist.
 */
function csrfToken(): string
{
    csrfStartSession();

    $existingToken =
        $_SESSION[
            SESSION_CSRF_TOKEN_KEY
        ] ?? '';

    if (
        is_string($existingToken) &&
        strlen($existingToken) ===
            CSRF_TOKEN_BYTES * 2
    ) {
        return $existingToken;
    }

    try {
        $token =
            bin2hex(
                random_bytes(
                    CSRF_TOKEN_BYTES
                )
            );
    } catch (Throwable $exception) {
        error_log(
            'CSRF token generation failed: ' .
            $exception->getMessage()
        );

        throw new RuntimeException(
            'Unable to initialize form security.'
        );
    }

    $_SESSION[
        SESSION_CSRF_TOKEN_KEY
    ] =
        $token;

    return $token;
}

/*
|--------------------------------------------------------------------------
| Render Hidden CSRF Form Field
|--------------------------------------------------------------------------
*/

/**
 * Return a hidden HTML field containing the CSRF token.
 */
function csrfField(): string
{
    return
        '<input type="hidden" ' .
        'name="csrf_token" ' .
        'value="' .
        e(
            csrfToken()
        ) .
        '">';
}

/*
|--------------------------------------------------------------------------
| Validate Submitted CSRF Token
|--------------------------------------------------------------------------
*/

/**
 * Validate a submitted CSRF token.
 */
function csrfIsValid(
    ?string $submittedToken
): bool {
    csrfStartSession();

    $storedToken =
        $_SESSION[
            SESSION_CSRF_TOKEN_KEY
        ] ?? '';

    if (
        !is_string($storedToken) ||
        $storedToken === '' ||
        $submittedToken === null ||
        $submittedToken === ''
    ) {
        return false;
    }

    return hash_equals(
        $storedToken,
        $submittedToken
    );
}

/*
|--------------------------------------------------------------------------
| Validate Current POST Request
|--------------------------------------------------------------------------
*/

/**
 * Validate the current POST request.
 *
 * The same-site check is supplemental. CSRF-token validation remains the
 * primary protection.
 */
function validateCsrfRequest(): void
{
    if (
        requestMethod() !== 'POST'
    ) {
        return;
    }

    if (
        !requestAppearsSameSite()
    ) {
        http_response_code(
            HTTP_STATUS_BAD_REQUEST
        );

        exit(
            'Invalid request origin.'
        );
    }

    $submittedToken =
        postString(
            'csrf_token'
        );

    if (
        !csrfIsValid(
            $submittedToken
        )
    ) {
        http_response_code(
            HTTP_STATUS_BAD_REQUEST
        );

        exit(
            'Invalid security token.'
        );
    }
}

/*
|--------------------------------------------------------------------------
| Rotate CSRF Token
|--------------------------------------------------------------------------
*/

/**
 * Remove the current token after a successful submission.
 *
 * A fresh token will be generated the next time csrfToken() or
 * csrfField() is called.
 */
function csrfRotateToken(): void
{
    csrfStartSession();

    unset(
        $_SESSION[
            SESSION_CSRF_TOKEN_KEY
        ]
    );
}