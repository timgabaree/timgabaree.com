<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Page Configuration
|--------------------------------------------------------------------------
*/

$page = 'thank-you';

$bodyClass =
    'contact-body';

$pageTitle =
    'Thank You | Tim Gabaree';

$metaDescription =
    'Thank you for contacting Tim Gabaree. Your message has been received and will be reviewed personally.';

$robots =
    'noindex, follow';

$canonicalUrl =
    SITE_THANK_YOU_URL;

/*
|--------------------------------------------------------------------------
| Open Graph
|--------------------------------------------------------------------------
*/

$ogType =
    'website';

$ogTitle =
    'Thank You | Tim Gabaree';

$ogDescription =
    'Your message has been received. Thank you for continuing the conversation with Tim Gabaree.';

/*
|--------------------------------------------------------------------------
| X / Twitter
|--------------------------------------------------------------------------
*/

$twitterDescription =
    'Your message has been received. Thank you for continuing the conversation.';

/*
|--------------------------------------------------------------------------
| Page Includes
|--------------------------------------------------------------------------
*/

require_once __DIR__ .
    '/includes/components/component-head-defaults.php';

require __DIR__ .
    '/includes/schema/schema-thank-you.php';

require __DIR__ .
    '/includes/components/component-head.php';

require __DIR__ .
    '/includes/components/component-header.php';

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
    isset($_GET['submitted']) &&
    is_string($_GET['submitted']) &&
    $_GET['submitted'] === '1';

?>

<?php if ($submissionConfirmed): ?>

<script>
(function () {
  const currentUrl =
    new URL(window.location.href);

  window.dataLayer =
    window.dataLayer || [];

  window.dataLayer.push({
    event: "contact_form_submission",
    form_name: "Continue the Conversation",
    form_location: "/contact"
  });

  /*
   * Remove the submission parameter after recording the event.
   *
   * This prevents a refresh from recording a duplicate conversion,
   * while allowing a later successful submission to record normally.
   */
  currentUrl.searchParams.delete("submitted");

  const cleanUrl =
    currentUrl.pathname +
    currentUrl.search +
    currentUrl.hash;

  window.history.replaceState(
    {},
    document.title,
    cleanUrl
  );
})();
</script>

<?php endif; ?>
<!-- End Contact-Form Conversion Event -->

<?php

require __DIR__ . '/includes/components/component-footer.php';

?>