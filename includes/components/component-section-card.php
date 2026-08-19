<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Section Card Component
|--------------------------------------------------------------------------
|
| Renders a titled page section containing:
|
| - A section heading
| - An introductory paragraph
| - A list of titled items with descriptions
|
| Expected variables:
|
| $sectionId
| $sectionTitle
| $sectionIntro
| $sectionItems
|
| Optional variable:
|
| $sectionClass
|
*/

/*
|--------------------------------------------------------------------------
| Component Requirements
|--------------------------------------------------------------------------
|
| bootstrap.php must already be loaded by the calling page.
|
*/

/*
|--------------------------------------------------------------------------
| Validate Required Component Data
|--------------------------------------------------------------------------
*/

if (
    !isset($sectionId) ||
    !is_string($sectionId)
) {
    throw new RuntimeException(
        'Section card requires a valid $sectionId.'
    );
}

$sectionId = trim($sectionId);

if ($sectionId === '') {
    throw new RuntimeException(
        'Section card requires a non-empty $sectionId.'
    );
}

if (
    !isset($sectionTitle) ||
    !is_string($sectionTitle)
) {
    throw new RuntimeException(
        'Section card requires a valid $sectionTitle.'
    );
}

$sectionTitle = trim($sectionTitle);

if ($sectionTitle === '') {
    throw new RuntimeException(
        'Section card requires a non-empty $sectionTitle.'
    );
}

if (
    !isset($sectionIntro) ||
    !is_string($sectionIntro)
) {
    throw new RuntimeException(
        'Section card requires a valid $sectionIntro.'
    );
}

$sectionIntro = trim($sectionIntro);

if (
    !isset($sectionItems) ||
    !is_array($sectionItems)
) {
    throw new RuntimeException(
        'Section card requires a valid $sectionItems array.'
    );
}

if (
    !isset($sectionClass) ||
    !is_string($sectionClass)
) {
    $sectionClass = '';
}

$sectionClass = trim($sectionClass);

/*
|--------------------------------------------------------------------------
| Validate Section Items
|--------------------------------------------------------------------------
*/

foreach ($sectionItems as $sectionItem) {
    if (
        !is_array($sectionItem) ||
        !isset($sectionItem['title']) ||
        !is_string($sectionItem['title']) ||
        trim($sectionItem['title']) === '' ||
        !isset($sectionItem['description']) ||
        !is_string($sectionItem['description']) ||
        trim($sectionItem['description']) === ''
    ) {
        throw new RuntimeException(
            'Every section-card item requires non-empty string title and description values.'
        );
    }
}

/*
|--------------------------------------------------------------------------
| Prepare Identifiers and Classes
|--------------------------------------------------------------------------
*/

$sectionHeadingId = $sectionId . '-title';

$sectionClasses = trim(
    'section-card-section scroll-offset ' .
    $sectionClass
);

?>

<div class="section-wrapper">

  <section
    id="<?= e($sectionId) ?>"
    class="<?= e($sectionClasses) ?>"
    aria-labelledby="<?= e($sectionHeadingId) ?>">

    <div class="section-card-heading-block">

      <h2
        id="<?= e($sectionHeadingId) ?>"
        class="section-card-heading">
        <?= e($sectionTitle) ?>
      </h2>

    </div>

    <div class="section-card-entry">

      <?php if ($sectionIntro !== ''): ?>

      <p class="section-card-intro">
        <?= e($sectionIntro) ?>
      </p>

      <?php endif; ?>

      <?php if ($sectionItems !== []): ?>

      <ul class="impact-list">

        <?php foreach ($sectionItems as $sectionItem): ?>

        <li>

          <strong>
            <?= e(trim($sectionItem['title'])) ?>
          </strong>

          <p>
            <?= e(trim($sectionItem['description'])) ?>
          </p>

        </li>

        <?php endforeach; ?>

      </ul>

      <?php endif; ?>

    </div>

  </section>

</div>
