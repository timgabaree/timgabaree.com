<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Testimonial Card Component
|--------------------------------------------------------------------------
|
| Renders one testimonial as a semantic figure containing:
|
| - A blockquote
| - The person’s name
| - The person’s professional title
| - The person’s organization
|
| Expected variables:
|
| $testimonialQuote
| $testimonialName
|
| Optional variables:
|
| $testimonialTitle
| $testimonialOrganization
| $testimonialClass
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
    !isset($testimonialQuote) ||
    !is_string($testimonialQuote) ||
    trim($testimonialQuote) === ''
) {
    throw new RuntimeException(
        'Testimonial card requires a valid $testimonialQuote.'
    );
}

if (
    !isset($testimonialName) ||
    !is_string($testimonialName) ||
    trim($testimonialName) === ''
) {
    throw new RuntimeException(
        'Testimonial card requires a valid $testimonialName.'
    );
}

/*
|--------------------------------------------------------------------------
| Prepare Optional Component Data
|--------------------------------------------------------------------------
*/

if (
    !isset($testimonialTitle) ||
    !is_string($testimonialTitle)
) {
    $testimonialTitle = '';
}

if (
    !isset($testimonialOrganization) ||
    !is_string($testimonialOrganization)
) {
    $testimonialOrganization = '';
}

if (
    !isset($testimonialClass) ||
    !is_string($testimonialClass)
) {
    $testimonialClass = '';
}

/*
|--------------------------------------------------------------------------
| Normalize Component Data
|--------------------------------------------------------------------------
*/

$testimonialQuote =
    trim($testimonialQuote);

$testimonialName =
    trim($testimonialName);

$testimonialTitle =
    trim($testimonialTitle);

$testimonialOrganization =
    trim($testimonialOrganization);

$testimonialClasses =
    trim(
        'testimonial-block ' .
        $testimonialClass
    );

?>

<figure class="<?= e($testimonialClasses) ?>">

  <blockquote class="testimonial-quote">

    <p>
      <?= e($testimonialQuote) ?>
    </p>

  </blockquote>

  <figcaption class="testimonial-author">

    <strong>
      <?= e($testimonialName) ?>
    </strong>

    <?php if ($testimonialTitle !== ''): ?>

      <br>

      <?= e($testimonialTitle) ?>

    <?php endif; ?>

    <?php if ($testimonialOrganization !== ''): ?>

      <br>

      <?= e($testimonialOrganization) ?>

    <?php endif; ?>

  </figcaption>

</figure>
