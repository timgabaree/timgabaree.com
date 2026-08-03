<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/bootstrap.php';

if (!isset($schema) || !is_array($schema) || $schema === []) {
    return;
}
?>

<!-- Structured Data -->
<script type="application/ld+json">
<?= jsonLd($schema) ?>
</script>
<!-- End Structured Data -->