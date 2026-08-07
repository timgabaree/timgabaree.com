<?php

declare(strict_types=1);

?>

<main id="main-content">

<section class="error-section">

<div class="container">

<p class="section-kicker">

Error <?= e($errorCode) ?>

</p>

<h1>

<?= e($errorTitle) ?>

</h1>

<p class="hero-lead">

<?= e($errorMessage) ?>

</p>

<p>

<?= e($errorSuggestion) ?>

</p>

<div class="error-actions">

<a
class="button primary"
href="<?= e(SITE_HOME_PATH) ?>">

Return Home

</a>

<a
class="button secondary"
href="<?= e(SITE_CONTACT_PATH) ?>">

Contact Tim

</a>

</div>

</div>

</section>

</main>