<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Site Header
|--------------------------------------------------------------------------
|
| Opens the document body and loads the shared analytics and navigation
| components.
|
| component-head.php and bootstrap.php must already be loaded by the
| public page before this component is required.
|
*/

$bodyClass =
    isset($bodyClass) &&
    is_string($bodyClass)
        ? trim($bodyClass)
        : '';

?>

<!-- Page Body -->
<body<?php if ($bodyClass !== ''): ?> class="<?= e($bodyClass) ?>"<?php endif; ?>>

<?php

require __DIR__ .
    '/component-analytics-body.php';

require __DIR__ .
    '/component-navbar.php';

?>