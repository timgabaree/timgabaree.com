<?php

declare(strict_types=1);

require_once dirname(__DIR__) .
    '/includes/bootstrap.php';

http_response_code(
    HTTP_STATUS_NOT_FOUND
);

/*
|--------------------------------------------------------------------------
| Page
|--------------------------------------------------------------------------
*/

$page =
    'error-404';

/*
|--------------------------------------------------------------------------
| Error Content
|--------------------------------------------------------------------------
*/

$errorCode =
    HTTP_STATUS_NOT_FOUND;

$errorTitle =
    'Page Not Found';

$errorMessage =
    'The page you requested could not be found.';

$errorSuggestion =
    'The address may have changed, or the page may no longer be available. You can return to the homepage or contact Tim.';

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
