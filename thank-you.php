<?php

declare(strict_types=1);

require_once __DIR__ .
    '/includes/bootstrap.php';

startApplicationSession();

/*
|--------------------------------------------------------------------------
| Page
|--------------------------------------------------------------------------
*/

$page =
    'thank-you';

/*
|--------------------------------------------------------------------------
| Page Start
|--------------------------------------------------------------------------
*/

require __DIR__ .
    '/includes/components/component-page-start.php';

?>

<main
  id="main-content"
  class="thank-you-page">

  <?= siteImage(
      'background',
      [
          'class' => 'thank-you-background-image',
      ]
  ) ?>

<!-- Thank-You Section -->

  <section
    class="thank-you-section"
    aria-labelledby="thank-you-title">

    <div class="thank-you-card">

      <p class="thank-you-eyebrow">
        Conversation Continued
      </p>

      <h1 id="thank-you-title">
        Thank you.
      </h1>

      <p class="thank-you-lead">
        Your message has been received successfully.
      </p>

      <p>
        Thank you for taking the time to reach out. I review each message
        personally and will respond as promptly as possible.
      </p>

      <p>
        In the meantime, you are welcome to return to my executive contact
        page, review my professional background, or connect with me directly
        on LinkedIn.
      </p>

      <div class="thank-you-actions">

        <a
          href="<?= e(SITE_CONTACT_PATH) ?>"
          class="thank-you-button">
          Return to Contact Page
        </a>

        <a
          href="<?= e(SITE_HOME_PATH) ?>"
          class="thank-you-button">
          View Executive Profile
        </a>

      </div>

      <hr>

      <section
        class="thank-you-contact"
        aria-labelledby="thank-you-direct-contact-title">

        <h2 id="thank-you-direct-contact-title">
          Need to reach out directly?
        </h2>

        <address class="thank-you-contact-links">

          <a href="mailto:<?= e(SITE_EMAIL) ?>">

            <span
              class="thank-you-contact-icon"
              aria-hidden="true">
              <img
                src="<?= e(SITE_IMAGES['contact_email']['path']) ?>"
                width="50"
                height="50"
                alt="">
            </span>

            <span>
              <?= e(SITE_EMAIL) ?>
            </span>

          </a>

          <a href="tel:<?= e(phoneHref(SITE_PHONE)) ?>">

            <span
              class="thank-you-contact-icon"
              aria-hidden="true">
              <img
                src="<?= e(SITE_IMAGES['contact_telephone']['path']) ?>"
                width="50"
                height="50"
                alt="">
            </span>

            <span>
              <?= e(phoneDisplay(SITE_PHONE)) ?>
            </span>

          </a>

          <a
            href="<?= e(SITE_LINKEDIN) ?>"
            target="_blank"
            rel="me noopener noreferrer">

            <span
              class="thank-you-contact-icon"
              aria-hidden="true">
              <img
                src="<?= e(SITE_IMAGES['contact_linkedin']['path']) ?>"
                width="50"
                height="50"
                alt="">
            </span>

            <span>
              Connect on LinkedIn

              <span class="visually-hidden">
                — opens in a new tab
              </span>
            </span>

          </a>

        </address>

      </section>

    </div>

  </section>

<!-- End Thank-You Section -->

</main>

<!-- Contact-Form Conversion Event -->

<?php

$submissionConfirmed =
    isset(
        $_SESSION[
            SESSION_CONTACT_CONVERSION_KEY
        ]
    ) &&
    $_SESSION[
        SESSION_CONTACT_CONVERSION_KEY
    ] === true;

unset(
    $_SESSION[
        SESSION_CONTACT_CONVERSION_KEY
    ]
);

?>

<!-- End Contact-Form Conversion Event -->

<?php

if ($submissionConfirmed) {
    $pageScripts[] =
        '/js/contact-conversion.js';
}

require __DIR__ .
    '/includes/components/component-footer.php';

?>
