<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Education Card Component
|--------------------------------------------------------------------------
|
| Renders one education entry containing:
|
| - Degree or credential
| - Institution name
| - Institution website link
| - Institution logo
| - Education background image
|
| Expected variables:
|
| $educationDegree
| $educationInstitution
| $educationUrl
| $educationLogoImage
| $educationBackgroundImage
|
| Optional variables:
|
| $educationClass
| $educationLinkLabel
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
    !isset($educationDegree) ||
    !is_string($educationDegree) ||
    trim($educationDegree) === ''
) {
    throw new RuntimeException(
        'Education card requires a valid $educationDegree.'
    );
}

if (
    !isset($educationInstitution) ||
    !is_string($educationInstitution) ||
    trim($educationInstitution) === ''
) {
    throw new RuntimeException(
        'Education card requires a valid $educationInstitution.'
    );
}

if (
    !isset($educationUrl) ||
    !is_string($educationUrl) ||
    filter_var(
        $educationUrl,
        FILTER_VALIDATE_URL
    ) === false
) {
    throw new RuntimeException(
        'Education card requires a valid $educationUrl.'
    );
}

if (
    !isset($educationLogoImage) ||
    !is_string($educationLogoImage) ||
    trim($educationLogoImage) === ''
) {
    throw new RuntimeException(
        'Education card requires a valid $educationLogoImage.'
    );
}

if (
    getSiteImage(
        $educationLogoImage
    ) === []
) {
    throw new RuntimeException(
        'Education card references an unknown logo image.'
    );
}

if (
    !isset($educationBackgroundImage) ||
    !is_string($educationBackgroundImage) ||
    trim($educationBackgroundImage) === ''
) {
    throw new RuntimeException(
        'Education card requires a valid $educationBackgroundImage.'
    );
}

if (
    getSiteImage(
        $educationBackgroundImage
    ) === []
) {
    throw new RuntimeException(
        'Education card references an unknown background image.'
    );
}

/*
|--------------------------------------------------------------------------
| Prepare Optional Component Data
|--------------------------------------------------------------------------
*/

if (
    !isset($educationClass) ||
    !is_string($educationClass)
) {
    $educationClass = '';
}

if (
    !isset($educationLinkLabel) ||
    !is_string($educationLinkLabel) ||
    trim($educationLinkLabel) === ''
) {
    $educationLinkLabel =
        'Visit the ' .
        trim($educationInstitution) .
        ' website — opens in a new tab';
}

/*
|--------------------------------------------------------------------------
| Normalize Component Data
|--------------------------------------------------------------------------
*/

$educationDegree =
    trim($educationDegree);

$educationInstitution =
    trim($educationInstitution);

$educationUrl =
    trim($educationUrl);

$educationLogoImage =
    trim($educationLogoImage);

$educationBackgroundImage =
    trim($educationBackgroundImage);

$educationLinkLabel =
    trim($educationLinkLabel);

$educationClasses =
    trim(
        'education-block ' .
        $educationClass
    );

?>

<article class="<?= e($educationClasses) ?>">

  <?= siteImage(
      $educationBackgroundImage,
      [
          'class' =>
              'education-background-image',
      ]
  ) ?>

  <div class="education-inner-block">

    <h3 class="education-title">
      <?= e($educationDegree) ?>
    </h3>

    <div class="education-logo">

      <a
        href="<?= e($educationUrl) ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="<?= e($educationLinkLabel) ?>">

        <?= siteImage(
            $educationLogoImage,
            [
                'alt' =>
                    '',

                'include_description' =>
                    false,
            ]
        ) ?>

      </a>

    </div>

  </div>

</article>
