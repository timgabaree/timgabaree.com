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
|
| Expected variables:
|
| $educationDegree
| $educationInstitution
| $educationUrl
| $educationLogo
| $educationLogoWidth
| $educationLogoHeight
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
    !isset($educationLogo) ||
    !is_string($educationLogo) ||
    trim($educationLogo) === ''
) {
    throw new RuntimeException(
        'Education card requires a valid $educationLogo.'
    );
}

if (
    !isset($educationLogoWidth) ||
    !is_int($educationLogoWidth) ||
    $educationLogoWidth < 1
) {
    throw new RuntimeException(
        'Education card requires a valid integer $educationLogoWidth.'
    );
}

if (
    !isset($educationLogoHeight) ||
    !is_int($educationLogoHeight) ||
    $educationLogoHeight < 1
) {
    throw new RuntimeException(
        'Education card requires a valid integer $educationLogoHeight.'
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

$educationLogo =
    trim($educationLogo);

$educationLinkLabel =
    trim($educationLinkLabel);

$educationClasses =
    trim(
        'education-block ' .
        $educationClass
    );

?>

<article class="<?= e($educationClasses) ?>">

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

        <img
          src="<?= e($educationLogo) ?>"
          alt="<?= e($educationInstitution) ?>"
          width="<?= e((string) $educationLogoWidth) ?>"
          height="<?= e((string) $educationLogoHeight) ?>"
          loading="lazy"
          decoding="async">

      </a>

    </div>

  </div>

</article>