<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Session-Based Rate Limiting
|--------------------------------------------------------------------------
|
| Provides a reusable minimum-time interval between actions within the
| visitor's current PHP session.
|
| This is a useful anti-abuse layer, but it is not a replacement for
| server-level or IP-based rate limiting.
|
*/

/*
|--------------------------------------------------------------------------
| Secure Session Initialization
|--------------------------------------------------------------------------
*/

function rateLimitStartSession(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }

    session_start([
        'cookie_httponly' => true,
        'cookie_secure' => true,
        'cookie_samesite' => 'Lax',
        'use_strict_mode' => true,
    ]);
}

/*
|--------------------------------------------------------------------------
| Normalize Rate-Limit Storage Key
|--------------------------------------------------------------------------
*/

function rateLimitSessionKey(string $action): string
{
    $normalizedAction =
        preg_replace(
            '/[^a-z0-9_-]+/i',
            '_',
            trim($action)
        ) ?? '';

    if ($normalizedAction === '') {
        throw new InvalidArgumentException(
            'Rate-limit action name cannot be empty.'
        );
    }

    return 'rate_limit_' .
        strtolower($normalizedAction);
}

/*
|--------------------------------------------------------------------------
| Check Whether Action Is Allowed
|--------------------------------------------------------------------------
*/

function rateLimitAllows(
    string $action,
    int $minimumSeconds
): bool {
    rateLimitStartSession();

    if ($minimumSeconds < 0) {
        throw new InvalidArgumentException(
            'Rate-limit interval cannot be negative.'
        );
    }

    $sessionKey =
        rateLimitSessionKey($action);

    $lastActionTime =
        $_SESSION[$sessionKey] ?? 0;

    if (!is_int($lastActionTime)) {
        $lastActionTime =
            (int) $lastActionTime;
    }

    if ($lastActionTime <= 0) {
        return true;
    }

    return (
        time() - $lastActionTime
    ) >= $minimumSeconds;
}

/*
|--------------------------------------------------------------------------
| Record Action
|--------------------------------------------------------------------------
*/

function rateLimitRecord(
    string $action,
    ?int $timestamp = null
): void {
    rateLimitStartSession();

    $sessionKey =
        rateLimitSessionKey($action);

    $_SESSION[$sessionKey] =
        $timestamp ?? time();
}

/*
|--------------------------------------------------------------------------
| Clear Rate-Limit Record
|--------------------------------------------------------------------------
*/

function rateLimitClear(string $action): void
{
    rateLimitStartSession();

    $sessionKey =
        rateLimitSessionKey($action);

    unset(
        $_SESSION[$sessionKey]
    );
}