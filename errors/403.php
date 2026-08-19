<?php

declare(strict_types=1);

require_once dirname(__DIR__) .
    '/includes/bootstrap.php';

http_response_code(
    HTTP_STATUS_FORBIDDEN
);

/*
|--------------------------------------------------------------------------
| Page
|--------------------------------------------------------------------------
*/

$page =
    'error-403';

/*
|--------------------------------------------------------------------------
| Error Content
|--------------------------------------------------------------------------
*/

$errorCode =
    HTTP_STATUS_FORBIDDEN;

$errorTitle =
    'Access Denied';

$errorMessage =
    'You do not have permission to access this page or resource.';

$errorSuggestion =
    'You can return to the homepage or contact Tim if you believe you reached this page in error.';

/*
|--------------------------------------------------------------------------
| Page Start
|--------------------------------------------------------------------------
*/

require dirname(__DIR__) .
    '/includes/components/component-page-start.php';

require dirname(__DIR__) .
    '/includes/components/component-error.php';

require dirname(__DIR__) .
    '/includes/components/component-footer.php';
