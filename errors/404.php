<?php

declare(strict_types=1);

require_once dirname(__DIR__) .
    '/includes/bootstrap.php';

http_response_code(
    HTTP_STATUS_NOT_FOUND
);

$page =
    'error-404';

$errorCode =
    404;

$errorTitle =
    'Page Not Found';

$errorMessage =
    'The page you requested could not be found.';

$errorSuggestion =
    'The address may have changed, or the page may no longer be available. You can return to the homepage or contact Tim.';

$pageTitle =
    'Page Not Found | Tim Gabaree';

$metaDescription =
    'The requested page could not be found on timgabaree.com.';

$robots =
    'noindex, follow';

$canonicalUrl =
    '';

require dirname(__DIR__) .
    '/includes/components/component-head.php';

require dirname(__DIR__) .
    '/includes/components/component-header.php';

require dirname(__DIR__) .
    '/includes/components/component-error.php';

require dirname(__DIR__) .
    '/includes/components/component-footer.php';
