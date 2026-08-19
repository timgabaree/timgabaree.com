<?php

declare(strict_types=1);

require_once dirname(__DIR__) .
    '/includes/bootstrap.php';

http_response_code(
    HTTP_STATUS_INTERNAL_SERVER_ERROR
);

/*
|--------------------------------------------------------------------------
| Page
|--------------------------------------------------------------------------
*/

$page =
    'error-500';

/*
|--------------------------------------------------------------------------
| Error Content
|--------------------------------------------------------------------------
*/

$errorCode =
    HTTP_STATUS_INTERNAL_SERVER_ERROR;

$errorTitle =
    'Something Went Wrong';

$errorMessage =
    'The website encountered an unexpected internal server error.';

$errorSuggestion =
    'Please try again shortly. If the problem continues, you can contact Tim.';

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
