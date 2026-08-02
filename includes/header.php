<?php

require_once __DIR__ . '/bootstrap.php';

if (!isset($bodyClass)) {
    $bodyClass = '';
}
?>

<!-- Page Body -->
<body<?php if ($bodyClass !== ''): ?> class="<?= e($bodyClass) ?>"<?php endif; ?>>

<?php require __DIR__ . '/analytics-body.php'; ?>

<?php require __DIR__ . '/navbar.php'; ?>