<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/bootstrap.php';

if (!isset($bodyClass) || !is_string($bodyClass)) {
    $bodyClass = '';
}

?>

<!-- Page Body -->
<body<?php if ($bodyClass !== ''): ?> class="<?= e($bodyClass) ?>"<?php endif; ?>>

<?php require __DIR__ . '/component-analytics-body.php'; ?>

<?php require __DIR__ . '/component-navbar.php'; ?>