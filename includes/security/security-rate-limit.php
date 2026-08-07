<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Session-Based Rate Limiting
|--------------------------------------------------------------------------
|
| Provides lightweight rate limiting for public forms.
|
| During the framework transition, this file can safely initialize the
| session itself. Once bootstrap.php starts the session globally, the
| session initialization function simply returns.
|
*/

/*
|--------------------------------------------------------------------------
| Secure Session Initialization
|--------------------------------------------------------------------------
*/

function rateLimitStartSession(): void
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
| Normalize Rate-Limit Storage Key
|--------------------------------------------------------------------------
*/

/**
 * Return the session key used for a rate-limited action.
 */
function rateLimitSessionKey(
    string $action
): string {
    $normalizedAction =
        preg_replace(
            '/[^a-z0-9_-]+/i',
            '_',
            strtolower(
                trim($action)
            )
        );

    if (
        !is_string($normalizedAction) ||
        $normalizedAction === ''
    ) {
        $normalizedAction =
            'default';
    }

    return SESSION_RATE_LIMIT_KEY .
        ':' .
        $normalizedAction;
}

/*
|--------------------------------------------------------------------------
| Last Recorded Action
|--------------------------------------------------------------------------
*/

/**
 * Return the timestamp of the last recorded action.
 */
function rateLimitLastTimestamp(
    string $action
): ?int {
    rateLimitStartSession();

    $sessionKey =
        rateLimitSessionKey(
            $action
        );

    if (
        !isset($_SESSION[$sessionKey])
    ) {
        return null;
    }

    $timestamp =
        $_SESSION[$sessionKey];

    if (
        is_int($timestamp)
    ) {
        return $timestamp;
    }

    if (
        is_numeric($timestamp)
    ) {
        return (int) $timestamp;
    }

    return null;
}

/*
|--------------------------------------------------------------------------
| Check Whether Action Is Allowed
|--------------------------------------------------------------------------
*/

/**
 * Determine whether the action may proceed.
 */
function rateLimitAllows(
    string $action,
    int $minimumSeconds
): bool {
    rateLimitStartSession();

    if (
        $minimumSeconds <= 0
    ) {
        return true;
    }

    $lastTimestamp =
        rateLimitLastTimestamp(
            $action
        );

    if (
        $lastTimestamp === null
    ) {
        return true;
    }

    return (
        time() -
        $lastTimestamp
    ) >=
        $minimumSeconds;
}

/*
|--------------------------------------------------------------------------
| Remaining Wait Time
|--------------------------------------------------------------------------
*/

/**
 * Return the number of seconds remaining before the action is allowed.
 */
function rateLimitSecondsRemaining(
    string $action,
    int $minimumSeconds
): int {
    rateLimitStartSession();

    if (
        $minimumSeconds <= 0
    ) {
        return 0;
    }

    $lastTimestamp =
        rateLimitLastTimestamp(
            $action
        );

    if (
        $lastTimestamp === null
    ) {
        return 0;
    }

    $elapsedSeconds =
        time() -
        $lastTimestamp;

    return max(
        0,
        $minimumSeconds -
        $elapsedSeconds
    );
}

/*
|--------------------------------------------------------------------------
| Record Action
|--------------------------------------------------------------------------
*/

/**
 * Record that a rate-limited action occurred.
 */
function rateLimitRecord(
    string $action,
    ?int $timestamp = null
): void {
    rateLimitStartSession();

    $_SESSION[
        rateLimitSessionKey(
            $action
        )
    ] =
        $timestamp ??
        time();
}

/*
|--------------------------------------------------------------------------
| Clear Rate-Limit Record
|--------------------------------------------------------------------------
*/

/**
 * Clear a recorded rate-limit timestamp.
 */
function rateLimitClear(
    string $action
): void {
    rateLimitStartSession();

    unset(
        $_SESSION[
            rateLimitSessionKey(
                $action
            )
        ]
    );
}