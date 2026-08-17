<?php

declare(strict_types=1);

require_once dirname(__DIR__) .
    '/includes/bootstrap.php';

http_response_code(
    HTTP_STATUS_INTERNAL_SERVER_ERROR
);

$page =
    'error-500';

$errorCode =
    500;

$errorTitle =
    'Something Went Wrong';

$errorMessage =
    'The website encountered an unexpected internal server error.';

$errorSuggestion =
    'Please try again shortly. If the problem continues, you can contact Tim.';

$pageTitle =
    'Server Error | Tim Gabaree';

$metaDescription =
    'An unexpected internal server error occurred on timgabaree.com.';

$robots =
    'noindex, nofollow';

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