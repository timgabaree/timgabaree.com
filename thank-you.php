<?php

declare(strict_types=1);

require_once __DIR__ .
    '/includes/bootstrap.php';

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
  class="executive-contact-page">

<!-- Thank-You Section -->

  <section
    class="contact-thank-you-section"
    aria-labelledby="contact-thank-you-title">

    <div class="contact-thank-you-card">

      <p class="contact-eyebrow">
        Conversation Continued
      </p>

      <h1 id="contact-thank-you-title">
        Thank you.
      </h1>

      <p class="contact-thank-you-lead">
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

      <div class="contact-thank-you-actions">

        <a
          href="<?= e(SITE_CONTACT_PATH) ?>"
          class="contact-thank-you-button">
          Return to Contact Page
        </a>

        <a
          href="<?= e(SITE_HOME_PATH) ?>"
          class="contact-thank-you-button">
          View Executive Profile
        </a>

      </div>

      <hr>

      <section
        class="contact-thank-you-contact"
        aria-labelledby="contact-direct-contact-title">

        <h2 id="contact-direct-contact-title">
          Need to reach out directly?
        </h2>

        <address class="contact-thank-you-contact-links">

          <a href="mailto:<?= e(SITE_EMAIL) ?>">

            <span
              class="contact-thank-you-contact-icon"
              aria-hidden="true">
              ✉
            </span>

            <span>
              <?= e(SITE_EMAIL) ?>
            </span>

          </a>

          <a href="tel:<?= e(phoneHref(SITE_PHONE)) ?>">

            <span
              class="contact-thank-you-contact-icon"
              aria-hidden="true">
              ☎
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
              class="contact-thank-you-contact-icon contact-linkedin-icon"
              aria-hidden="true">
              in
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

$pageScripts = [];

if ($submissionConfirmed) {
    $pageScripts[] =
        '/js/contact-conversion.js';
}

require __DIR__ .
    '/includes/components/component-footer.php';

?>
