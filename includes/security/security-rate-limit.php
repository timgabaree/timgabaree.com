<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Session-Based Rate Limiting
|--------------------------------------------------------------------------
|
| Provides lightweight rate limiting for public forms.
|
| Sessions are initialized centrally by bootstrap.php before this module
| is loaded.
|
*/

/*
|--------------------------------------------------------------------------
| Normalize Rate-Limit Storage Key
|--------------------------------------------------------------------------
|
| Return the session key used for a rate-limited action.
|
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
|
| Return the timestamp of the last recorded action.
|
*/

function rateLimitLastTimestamp(
    string $action
): ?int {
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
|
| Determine whether the action may proceed.
|
*/

function rateLimitAllows(
    string $action,
    int $minimumSeconds
): bool {

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
| Record Action
|--------------------------------------------------------------------------
|
| Record that a rate-limited action occurred.
|
*/

function rateLimitRecord(
    string $action,
    ?int $timestamp = null
): void {

    $_SESSION[
        rateLimitSessionKey(
            $action
        )
    ] =
        $timestamp ??
        time();
}
