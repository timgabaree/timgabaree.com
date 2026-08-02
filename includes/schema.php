<?php

require_once __DIR__ . '/bootstrap.php';

if (!isset($schema) || !is_array($schema) || $schema === []) {
    return;
}
?>

<!-- Structured Data -->
<script type="application/ld+json">
<?= jsonLd($schema) ?>
</script>
<!-- End Structured Data -->