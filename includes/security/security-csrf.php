<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Cross-Site Request Forgery Protection
|--------------------------------------------------------------------------
|
| Generates, stores, validates, and rotates CSRF tokens for public forms.
|
| Sessions are initialized centrally by bootstrap.php before this module
| is loaded.
|
*/

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
    unset(
        $_SESSION[
            SESSION_CSRF_TOKEN_KEY
        ]
    );
}