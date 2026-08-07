<?php

declare(strict_types=1);

require_once dirname(__DIR__) .
    '/includes/bootstrap.php';

http_response_code(
    HTTP_STATUS_FORBIDDEN
);

$page =
    'error-403';

$errorCode =
    403;

$errorTitle =
    'Access Denied';

$errorMessage =
    'You do not have permission to access this page or resource.';

$errorSuggestion =
    'You can return to the homepage or contact Tim if you believe you reached this page in error.';

$pageTitle =
    'Access Denied | Tim Gabaree';

$metaDescription =
    'Access to this page or resource is restricted.';

$robots =
    'noindex, follow';

$canonicalUrl =
    SITE_URL .
    '/403';

require dirname(__DIR__) .
    '/includes/schema/schema-error.php';

require dirname(__DIR__) .
    '/includes/components/component-head.php';

require dirname(__DIR__) .
    '/includes/components/component-header.php';

require dirname(__DIR__) .
    '/includes/components/component-error.php';

require dirname(__DIR__) .
    '/includes/components/component-footer.php';