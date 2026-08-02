<?php

declare ( strict_types = 1 );

/*
|--------------------------------------------------------------------------
| HTML Escaping
|--------------------------------------------------------------------------
*/

function e( string $value ): string {
  return htmlspecialchars(
    $value,
    ENT_QUOTES | ENT_SUBSTITUTE,
    'UTF-8'
  );
}

/*
|--------------------------------------------------------------------------
| Asset URL
|--------------------------------------------------------------------------
*/

function asset( string $path, string $version ): string {
  $separator = str_contains( $path, '?' ) ? '&' : '?';

  return $path . $separator . 'v=' . rawurlencode( $version );
}

/*
|--------------------------------------------------------------------------
| Copyright Notice
|--------------------------------------------------------------------------
*/

function copyrightNotice(): string {
  return sprintf(
    '&copy; %s&ndash;%s %s. All Rights Reserved.',
    e( COPYRIGHT_START_YEAR ),
    e( COPYRIGHT_YEAR ),
    e( COPYRIGHT_NAME )
  );
}

/*
|--------------------------------------------------------------------------
| Telephone Link
|--------------------------------------------------------------------------
*/

function phoneHref( string $phone ): string {
  return preg_replace( '/[^\d+]/', '', $phone ) ?? $phone;
}

/*
|--------------------------------------------------------------------------
| Telephone Display
|--------------------------------------------------------------------------
*/

function phoneDisplay( string $phone ): string {
  $digits = preg_replace( '/\D+/', '', $phone ) ?? '';

  if ( strlen( $digits ) === 11 && str_starts_with( $digits, '1' ) ) {
    $digits = substr( $digits, 1 );
  }

  if ( strlen( $digits ) === 10 ) {
    return sprintf(
      '%s.%s.%s',
      substr( $digits, 0, 3 ),
      substr( $digits, 3, 3 ),
      substr( $digits, 6, 4 )
    );
  }

  return $phone;
}

/*
|--------------------------------------------------------------------------
| JSON Encoding
|--------------------------------------------------------------------------
*/

function jsonLd( mixed $value ): string {
  $json = json_encode(
    $value,
    JSON_UNESCAPED_SLASHES |
    JSON_UNESCAPED_UNICODE |
    JSON_PRETTY_PRINT |
    JSON_HEX_TAG |
    JSON_HEX_AMP |
    JSON_HEX_APOS |
    JSON_HEX_QUOT
  );

  return is_string( $json ) ? $json : '{}';
}