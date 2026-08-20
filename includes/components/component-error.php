<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Error Page Component
|--------------------------------------------------------------------------
|
| Renders the shared content for HTTP error pages.
|
| Expected variables:
|
| $errorCode
| $errorTitle
| $errorMessage
| $errorSuggestion
|
*/

?>

<main id="main-content">

<!-- Error Section -->

<section class="component-error">

  <div class="component-error-container">

    <p class="component-error-kicker">
      Error <?= e($errorCode) ?>
    </p>

    <h1>
      <?= e($errorTitle) ?>
    </h1>

    <p class="component-error-lead">
      <?= e($errorMessage) ?>
    </p>

    <p>
      <?= e($errorSuggestion) ?>
    </p>

    <div class="component-error-actions">

      <a
        class="component-error-button component-error-button-primary"
        href="<?= e(SITE_HOME_PATH) ?>">
        Return Home
      </a>

      <a
        class="component-error-button component-error-button-secondary"
        href="<?= e(SITE_CONTACT_PATH) ?>">
        Contact Tim
      </a>

    </div>

  </div>

</section>

<!-- End Error Section -->

</main>
