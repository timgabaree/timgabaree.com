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
| Optional variable:
|
| $bodyClass
|
*/

/*
|--------------------------------------------------------------------------
| Component Requirements
|--------------------------------------------------------------------------
|
| bootstrap.php and component-head.php must already be loaded by the
| calling page.
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

<a
  class="skip-link"
  href="#main-content">
  Skip to main content
</a>

<?php

require __DIR__ .
    '/component-analytics-body.php';

require __DIR__ .
    '/component-navbar.php';

?>
