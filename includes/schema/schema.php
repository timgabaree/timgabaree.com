<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Structured Data Renderer
|--------------------------------------------------------------------------
|
| Outputs the page-specific Schema.org graph prepared by the corresponding
| schema file.
|
| Each page schema file must assign an array to $schemaGraph before this
| renderer is required by component-head.php.
|
*/

/*
|--------------------------------------------------------------------------
| Validate Schema Graph
|--------------------------------------------------------------------------
*/

if (
    !isset($schemaGraph) ||
    !is_array($schemaGraph) ||
    $schemaGraph === []
) {
    return;
}

/*
|--------------------------------------------------------------------------
| Remove Empty Graph Entries
|--------------------------------------------------------------------------
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

/*
|--------------------------------------------------------------------------
| Build JSON-LD Document
|--------------------------------------------------------------------------
*/

$structuredData = [
    '@context' => SCHEMA_CONTEXT,

    '@graph' => $schemaGraph,
];

/*
|--------------------------------------------------------------------------
| Render JSON-LD
|--------------------------------------------------------------------------
*/

?>

<!-- Structured Data -->

<script
  type="application/ld+json"
  nonce="<?= e(contentSecurityPolicyNonce()) ?>">
<?= jsonForHtml($structuredData) ?>
</script>

<!-- End Structured Data -->
