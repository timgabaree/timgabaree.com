<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Structured Data Renderer
|--------------------------------------------------------------------------
|
| Outputs the page-specific Schema.org structured data prepared by the
| corresponding schema file.
|
| During the framework transition, this renderer supports both:
|
| - $schemaGraph  — preferred framework format;
| - $schema       — legacy Tim Gabaree schema format.
|
| Page-specific schema files should not output JSON-LD directly.
|
*/

/*
|--------------------------------------------------------------------------
| Preferred Schema Graph
|--------------------------------------------------------------------------
*/

if (
    isset($schemaGraph) &&
    is_array($schemaGraph) &&
    $schemaGraph !== []
) {
    /*
     * Remove empty or invalid graph entries.
     */
    $schemaGraph =
        array_values(
            array_filter(
                $schemaGraph,
                static function (
                    mixed $schemaItem
                ): bool {
                    return is_array($schemaItem) &&
                        $schemaItem !== [];
                }
            )
        );

    if ($schemaGraph === []) {
        return;
    }

    $structuredData = [
        '@context' =>
            SCHEMA_CONTEXT,

        '@graph' =>
            $schemaGraph,
    ];

    ?>

<!-- Structured Data -->
<script type="application/ld+json">
<?= jsonForHtml($structuredData) ?>
</script>
<!-- End Structured Data -->

    <?php

    return;
}

/*
|--------------------------------------------------------------------------
| Legacy Schema Document
|--------------------------------------------------------------------------
|
| Existing Tim Gabaree schema files currently build the complete JSON-LD
| document in $schema. Retain support while those files are normalized.
|
*/

if (
    !isset($schema) ||
    !is_array($schema) ||
    $schema === []
) {
    return;
}

?>

<!-- Structured Data -->
<script type="application/ld+json">
<?= jsonForHtml($schema) ?>
</script>
<!-- End Structured Data -->