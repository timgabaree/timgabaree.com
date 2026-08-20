<?php

declare(strict_types=1);

require_once __DIR__ .
    '/includes/bootstrap.php';

require_once __DIR__ .
    '/includes/forms/form-contact-topics.php';

/*
|--------------------------------------------------------------------------
| Page
|--------------------------------------------------------------------------
*/

$page =
    'contact';

/*
|--------------------------------------------------------------------------
| Contact Form Status
|--------------------------------------------------------------------------
*/

$formStatus =
    isset($_GET['status']) &&
    is_string($_GET['status'])
        ? $_GET['status']
        : '';

$formStatusMessages = [
    CONTACT_STATUS_MISSING =>
        'Please complete all required fields.',

    CONTACT_STATUS_INVALID =>
        'Some submitted information could not be accepted. Please review the form and try again.',

    CONTACT_STATUS_INVALID_EMAIL =>
        'Please enter a valid email address.',

    CONTACT_STATUS_RATE_LIMITED =>
        'Please wait a few seconds before submitting another message.',

    CONTACT_STATUS_SECURITY_ERROR =>
        'Your form session could not be verified. Please reload this page and try again.',

    CONTACT_STATUS_SEND_ERROR =>
        'Your message could not be sent at this time. Please try again or contact me directly.',
];

$formStatusMessage =
    $formStatusMessages[$formStatus] ?? '';

/*
|--------------------------------------------------------------------------
| CSRF Protection
|--------------------------------------------------------------------------
|
| Generate the token before the head or page body outputs any HTML.
| This allows PHP to initialize the session before headers are sent.
|
*/

$csrfToken =
    csrfToken();

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
  class="contact-page">

  <?= siteImage(
      'background',
      [
          'class' =>
              'contact-background-image',
      ]
  ) ?>

<!-- Executive Contact Section -->

  <section
    class="contact-section"
    aria-labelledby="contact-page-title">

    <div class="contact-card">

      <div class="contact-profile">

        <?= siteImage(
            'profile',
            [
                'class' =>
                    'contact-profile-image',
            ]
        ) ?>

        <p class="contact-location">
          Washington, DC
          <span aria-hidden="true"> • </span>
          New York
          <span aria-hidden="true"> • </span>
          Chicago
        </p>

      </div>

      <div class="contact-page-content">

        <p class="contact-eyebrow">
          Connect
        </p>

        <h1 id="contact-page-title">
          <?= e(SITE_NAME) ?>
        </h1>

        <p class="contact-headline">

          <span class="contact-headline-line">

            <span class="contact-headline-item">
              Portfolio CIO
            </span>

            <span class="contact-headline-item">
              Technology Value Creation
            </span>

          </span>

          <span class="contact-headline-line">

            <span class="contact-headline-item contact-headline-item-secondary">
              Enterprise Performance
            </span>

          </span>

        </p>

        <p class="contact-summary">
          Technology and operations executive helping organizations improve
          performance through stronger governance, technology strategy,
          operating model transformation, AI strategy, and execution.
        </p>

        <div class="contact-actions">

          <a
            href="<?= e(SITE_VCARD_PATH) ?>"
            class="contact-action contact-action-primary">

            <span
              class="contact-action-icon contact-vcard-icon"
              aria-hidden="true">
              ＋
            </span>

            <span class="contact-action-text">
              <strong>Save Contact</strong>
              <small>Download a vCard for your contacts</small>
            </span>

          </a>

          <a
            href="mailto:<?= e(SITE_EMAIL) ?>"
            class="contact-action">

            <span
              class="contact-action-icon contact-email-icon"
              aria-hidden="true">
              ✉
            </span>

            <span class="contact-action-text">
              <strong>Email</strong>
              <small><?= e(SITE_EMAIL) ?></small>
            </span>

          </a>

          <a
            href="tel:<?= e(phoneHref(SITE_PHONE)) ?>"
            class="contact-action">

            <span
              class="contact-action-icon contact-telephone-icon"
              aria-hidden="true">
              ☎
            </span>

            <span class="contact-action-text">
              <strong>Call</strong>
              <small><?= e(phoneDisplay(SITE_PHONE)) ?></small>
            </span>

          </a>

          <a
            href="<?= e(SITE_LINKEDIN) ?>"
            target="_blank"
            rel="me noopener noreferrer"
            class="contact-action"
            aria-label="Connect with Tim Gabaree on LinkedIn — opens in a new tab">

            <span
              class="contact-action-icon contact-linkedin-icon"
              aria-hidden="true">
              in
            </span>

            <span class="contact-action-text">
              <strong>LinkedIn</strong>
              <small>Connect professionally</small>
            </span>

          </a>

          <a
            href="<?= e(SITE_CALENDLY) ?>"
            class="contact-action"
            data-calendly-trigger
            data-calendly-url="<?= e(SITE_CALENDLY) ?>">

            <span
              class="contact-action-icon contact-schedule-icon"
              aria-hidden="true">
              ◷
            </span>

            <span class="contact-action-text">
              <strong>Schedule</strong>
              <small>View availability</small>
            </span>

          </a>

          <a
            href="https://rgesol.com/"
            target="_blank"
            rel="noopener noreferrer"
            class="contact-action"
            aria-label="Visit RGE Solutions — opens in a new tab">

            <span
              class="contact-action-icon contact-rge-icon"
              aria-hidden="true">
              RGE
            </span>

            <span class="contact-action-text">
              <strong>RGE Solutions</strong>
              <small>Technology advisory and execution</small>
            </span>

          </a>

        </div>

      </div>

    </div>

  </section>

<!-- End Executive Contact Section -->

<!-- Executive Portfolio Section -->

  <section
    class="contact-resources"
    aria-labelledby="contact-resources-title">

    <h2
      id="contact-resources-title"
      class="contact-resources-heading">
      Executive Portfolio
    </h2>

    <p class="contact-resources-description">
      Executive and board materials highlighting my leadership experience,
      governance philosophy, and enterprise technology strategy.
    </p>

    <div class="contact-resource-grid">

      <a
        href="<?= e(DOCSEND_EXECUTIVE_PROFILE) ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="contact-resource-link">

        Executive Profile

        <span class="visually-hidden">
          — opens in a new tab
        </span>

      </a>

      <a
        href="<?= e(DOCSEND_RESUME) ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="contact-resource-link">

        Executive Résumé

        <span class="visually-hidden">
          — opens in a new tab
        </span>

      </a>

      <a
        href="<?= e(DOCSEND_EXECUTIVE_BIO) ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="contact-resource-link">

        Executive Biography

        <span class="visually-hidden">
          — opens in a new tab
        </span>

      </a>

      <a
        href="<?= e(DOCSEND_BOARD_RESUME) ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="contact-resource-link">

        Board Résumé

        <span class="visually-hidden">
          — opens in a new tab
        </span>

      </a>

      <a
        href="<?= e(DOCSEND_BOARD_BIO) ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="contact-resource-link">

        Board Biography

        <span class="visually-hidden">
          — opens in a new tab
        </span>

      </a>

    </div>

  </section>

<!-- End Executive Portfolio Section -->

  <?php if ($formStatusMessage !== ''): ?>

<!-- Contact Form Status -->

  <div
    id="contact-form-status"
    class="contact-form-status"
    role="alert">

    <p class="contact-form-status-message">
      <?= e($formStatusMessage) ?>
    </p>

  </div>

<!-- End Contact Form Status -->

  <?php endif; ?>

<!-- Contact Form Section -->

  <section
    class="contact-conversation-section"
    aria-labelledby="contact-conversation-title">

    <div class="contact-conversation-card">

      <div class="contact-conversation-intro">

        <p class="contact-eyebrow">
          Continue the Conversation
        </p>

        <h2 id="contact-conversation-title">
          Let’s stay connected.
        </h2>

        <p>
          Share a little about the opportunity, challenge, or conversation
          you would like to continue. I review each message personally and
          will respond as promptly as possible.
        </p>

      </div>

      <form
        class="contact-contact-form"
        action="<?= e(SITE_CONTACT_SUBMIT_PATH) ?>"
        method="post"
        accept-charset="UTF-8"
        <?php if ($formStatusMessage !== ''): ?>
        aria-describedby="contact-form-status contact-required-fields"
        <?php else: ?>
        aria-describedby="contact-required-fields"
        <?php endif; ?>>

<!--
|--------------------------------------------------------------------------
| CSRF Protection
|--------------------------------------------------------------------------
-->

        <input
          type="hidden"
          name="csrf_token"
          value="<?= e($csrfToken) ?>">

        <p
          id="contact-required-fields"
          class="visually-hidden">
          Fields marked with an asterisk are required.
        </p>

<!--
|--------------------------------------------------------------------------
| Honeypot Spam Protection
|--------------------------------------------------------------------------
-->

        <div
          class="contact-form-honeypot"
          aria-hidden="true">

          <label for="website">
            Leave this field empty
          </label>

          <input
            type="text"
            id="website"
            name="website"
            tabindex="-1"
            autocomplete="off">

        </div>

        <div class="contact-form-grid">

          <div class="contact-form-field">

            <label for="name">
              Name
              <span aria-hidden="true">*</span>
            </label>

            <input
              type="text"
              id="name"
              name="name"
              autocomplete="name"
              maxlength="100"
              required
              aria-required="true">

          </div>

          <div class="contact-form-field">

            <label for="organization">
              Organization
            </label>

            <input
              type="text"
              id="organization"
              name="organization"
              autocomplete="organization"
              maxlength="150">

          </div>

          <div class="contact-form-field">

            <label for="email">
              Email
              <span aria-hidden="true">*</span>
            </label>

            <input
              type="email"
              id="email"
              name="email"
              autocomplete="email"
              inputmode="email"
              maxlength="254"
              required
              aria-required="true">

          </div>

          <div class="contact-form-field">

            <label for="phone">
              Phone
            </label>

            <input
              type="tel"
              id="phone"
              name="phone"
              autocomplete="tel"
              inputmode="tel"
              maxlength="40">

          </div>

          <div class="contact-form-field contact-form-field-full">

            <label for="topic">
              What would you like to discuss?
              <span aria-hidden="true">*</span>
            </label>

            <select
              id="topic"
              name="topic"
              required
              aria-required="true">

              <option
                value=""
                selected
                disabled>
                Select a topic
              </option>

              <?php foreach ($contactTopics as $topicValue => $topicLabel): ?>

              <option value="<?= e($topicValue) ?>">
                <?= e($topicLabel) ?>
              </option>

              <?php endforeach; ?>

            </select>

          </div>

          <div class="contact-form-field contact-form-field-full">

            <label for="message">
              Message
              <span aria-hidden="true">*</span>
            </label>

            <textarea
              id="message"
              name="message"
              rows="7"
              maxlength="5000"
              placeholder="Share a few details about the opportunity, challenge, timeline, or conversation you would like to continue."
              required
              aria-required="true"></textarea>

          </div>

        </div>

        <div class="contact-form-submit">

          <button
            type="submit"
            class="contact-form-button">
            Send Your Message
          </button>

          <p class="contact-form-note">
            Information submitted through this form will be used to respond
            to your inquiry. Please do not include confidential or highly
            sensitive information.

            <a
              href="<?= e(SITE_PRIVACY_PATH) ?>"
              target="_blank"
              rel="noopener noreferrer">
              View the Privacy Policy.
              <span class="visually-hidden">
                Opens in a new tab.
              </span>
            </a>
          </p>

        </div>

      </form>

    </div>

  </section>

<!-- End Contact Form Section -->

<!-- Mobile QR Code Section -->

  <section
    class="contact-qr-section"
    aria-labelledby="contact-qr-title">

    <h2 id="contact-qr-title">
      Viewing this on your computer?
    </h2>

    <p>
      Scan this QR code with your phone
      <br>
      to open this page on your mobile device.
    </p>

    <a
      href="<?= e(SITE_CONTACT_PATH) ?>"
      aria-label="Open Tim Gabaree’s contact page">

      <?= siteImage('qr_code') ?>

    </a>

  </section>

<!-- End Mobile QR Code Section -->

<!-- Related Website Section -->

  <section
    class="contact-related-site"
    aria-labelledby="contact-related-site-title">

    <h2
      id="contact-related-site-title"
      class="visually-hidden">
      Related Website
    </h2>

    <p>
      Looking for Carrie Gabaree, museum curator and public historian?
      <br>

      Visit

      <a
        href="https://carriegabaree.com/"
        target="_blank"
        rel="noopener noreferrer">
        carriegabaree.com
        <span class="visually-hidden">
          — opens in a new tab
        </span>
      </a>
    </p>

  </section>

<!-- End Related Website Section -->

</main>

<?php

require __DIR__ .
    '/includes/components/component-footer.php';

?>
