<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
require_once __DIR__ . '/includes/contact-topics.php';
$page = 'hello';
$bodyClass = 'hello-body';
$pageTitle = 'Connect with Tim Gabaree | Executive Contact';
$metaDescription = 'Connect with Tim Gabaree, Portfolio CIO and technology executive focused on technology value creation, governance, and enterprise performance.';
$canonicalUrl = SITE_URL . '/hello.php';
$ogType = 'profile';
$ogTitle = 'Connect with Tim Gabaree';
$ogDescription = 'Save Tim’s contact information, connect on LinkedIn, schedule a meeting, or review executive materials.';
$twitterDescription = 'Portfolio CIO | Technology Value Creation | Enterprise Performance';
$preloadImage = '/media/timgabaree_profile5_900x1200.webp';
require __DIR__ . '/includes/schema-hello.php';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main class="hello-page">
  <section class="hello-section">
    <div class="hello-card">
      <div class="hello-profile"> <img
          src="/media/timgabaree_profile5_900x1200.webp"
          alt="Tim Gabaree"
          class="hello-profile-image"
          width="900"
          height="1200"
          loading="eager"
          fetchpriority="high"
          decoding="async">
        <p class="hello-location"> Chicago • Washington, DC • New York </p>
      </div>
      <div class="hello-content">
        <p class="hello-eyebrow">Connect</p>
        <h1>
          <?= e(SITE_NAME) ?>
        </h1>
        <p class="hello-headline"> Portfolio CIO | Technology Value Creation | Enterprise Performance </p>
        <p class="hello-summary"> Technology and operations executive helping organizations improve
          performance through stronger governance, technology strategy,
          operating model transformation, AI strategy, and execution. </p>
        <div class="hello-actions"> <a
            href="/timgabaree.vcf"
            class="hello-action hello-action-primary"> <span class="hello-action-icon hello-vcard-icon" aria-hidden="true">＋</span> <span class="hello-action-text"> <strong>Save Contact</strong> <small>Download a vCard for your contacts</small> </span> </a> <a
  href="mailto:<?= e(SITE_EMAIL) ?>"
  class="hello-action"> <span
    class="hello-action-icon hello-email-icon"
    aria-hidden="true"> ✉ </span> <span class="hello-action-text"> <strong>Email</strong> <small>
          <?= e(SITE_EMAIL) ?>
          </small> </span> </a> <a
  href="tel:<?= e(phoneHref(SITE_PHONE)) ?>"
  class="hello-action"> <span
    class="hello-action-icon hello-telephone-icon"
    aria-hidden="true"> ☎ </span> <span class="hello-action-text"> <strong>Call</strong> <small>
          <?= e(phoneDisplay(SITE_PHONE)) ?>
          </small> </span> </a> <a
            href="<?= e(SITE_LINKEDIN) ?>"
            target="_blank"
            rel="me noopener noreferrer"
            class="hello-action"> <span class="hello-action-icon hello-linkedin-icon" aria-hidden="true">in</span> <span class="hello-action-text"> <strong>LinkedIn</strong> <small>Connect professionally</small> </span> </a>
          <button
  type="button"
  onclick="openCalendly()"
  class="hello-action"> <span class="hello-action-icon hello-schedule-icon" aria-hidden="true">◷</span> <span class="hello-action-text"> <strong>Schedule</strong> <small>View availability</small> </span> </button>
          <a
            href="https://rgesol.com/"
            target="_blank"
            rel="noopener noreferrer"
            class="hello-action"> <span class="hello-action-icon hello-rge-icon" aria-hidden="true">RGE</span> <span class="hello-action-text"> <strong>RGE Solutions</strong> <small>Technology advisory and execution</small> </span> </a> </div>
      </div>
    </div>
  </section>
  <section
  class="hello-resources"
  aria-labelledby="hello-resources-title">
    <p class="hello-eyebrow">Resources</p>
    <div class="hello-resource-grid"> <a
        href="<?= e(DOCSEND_EXECUTIVE_PROFILE) ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="hello-resource-link"> Executive Profile </a> <a
        href="<?= e(DOCSEND_RESUME) ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="hello-resource-link"> Résumé </a> <a
        href="<?= e(DOCSEND_EXECUTIVE_BIO) ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="hello-resource-link"> Executive Bio </a> <a
        href="<?= e(DOCSEND_BOARD_RESUME) ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="hello-resource-link"> Board Résumé </a> <a
        href="<?= e(DOCSEND_BOARD_BIO) ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="hello-resource-link"> Board Bio </a> </div>
  </section>
  <section
  class="hello-conversation-section"
  aria-labelledby="hello-conversation-title">
    <div class="hello-conversation-card">
      <div class="hello-conversation-intro">
        <p class="hello-eyebrow"> Continue the Conversation </p>
        <h2 id="hello-conversation-title"> Let’s stay connected. </h2>
        <p> Share a little about the opportunity, challenge, or conversation
          you would like to continue. I review each message personally and
          will respond as promptly as possible. </p>
      </div>
      <form
      class="hello-contact-form"
      action="/hello-submit.php"
      method="post"
      accept-charset="UTF-8">
        <!-- Honeypot field for spam protection -->
        <div class="hello-form-honeypot"
           aria-hidden="true">
          <label for="website"> Leave this field empty </label>
          <input
          type="text"
          id="website"
          name="website"
          tabindex="-1"
          autocomplete="off">
        </div>
        <div class="hello-form-grid">
          <div class="hello-form-field">
            <label for="name"> Name <span aria-hidden="true">*</span> </label>
            <input
            type="text"
            id="name"
            name="name"
            autocomplete="name"
            maxlength="100"
            required>
          </div>
          <div class="hello-form-field">
            <label for="organization"> Organization </label>
            <input
            type="text"
            id="organization"
            name="organization"
            autocomplete="organization"
            maxlength="150">
          </div>
          <div class="hello-form-field">
            <label for="email"> Email <span aria-hidden="true">*</span> </label>
            <input
            type="email"
            id="email"
            name="email"
            autocomplete="email"
            inputmode="email"
            maxlength="254"
            required>
          </div>
          <div class="hello-form-field">
            <label for="phone"> Phone </label>
            <input
            type="tel"
            id="phone"
            name="phone"
            autocomplete="tel"
            inputmode="tel"
            maxlength="40">
          </div>
          <div class="hello-form-field hello-form-field-full">
            <label for="topic"> What would you like to discuss? <span aria-hidden="true">*</span> </label>
            <select
  			id="topic"
  			name="topic"
  			required>
              <option
   			value=""
    		selected
  			disabled> Select a topic </option>
              <?php foreach ($contactTopics as $topicValue => $topicLabel): ?>
              <option value="<?= e($topicValue) ?>">
              <?= e($topicLabel) ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="hello-form-field hello-form-field-full">
            <label for="message"> Message <span aria-hidden="true">*</span> </label>
            <textarea
            id="message"
            name="message"
            rows="7"
            maxlength="5000"
            placeholder="Share a few details about the opportunity, challenge, timeline, or conversation you would like to continue."
            required></textarea>
          </div>
        </div>
        <div class="hello-form-submit">
          <button
    		type="submit"
   		 	class="hello-form-button"> Send Your Message </button>
          <p class="hello-form-note"> Information submitted through this form will be used to respond
            to your inquiry. Please do not include confidential or highly
            sensitive information. <a href="/privacy.php"
       target="_blank"
       rel="noopener noreferrer"> View the Privacy Policy. </a> </p>
        </div>
      </form>
    </div>
  </section>
  <section class="hello-qr-section">
    <h2>Viewing this on your computer?</h2>
    <p> Scan this QR code with your phone <br>
      to open this page on your mobile device. </p>
    <a href="/hello.php" aria-label="Open Tim Gabaree contact page"> <img
      src="/media/timgabaree-qr-code.webp"
      alt="QR code to Tim Gabaree's contact page"
      loading="lazy"
      width="180"
      height="180"> </a> </section>
  <section class="hello-related-site">
    <p> Looking for Carrie Gabaree, museum curator and public historian? <br>
      Visit her <a href="https://carriegabaree.com/"
       target="_blank"
       rel="noopener noreferrer">website</a>.</p>
  </section>
</main>
<!-- Calendly -->
<script>
function openCalendly() {

  if (typeof dataLayer !== "undefined") {
    dataLayer.push({
      event: "calendly_click"
    });
  }

  if (typeof Calendly !== "undefined") {
    Calendly.initPopupWidget({
      url: <?= json_encode(
        SITE_CALENDLY,
        JSON_UNESCAPED_SLASHES
      ) ?>
    });

    return;
  }

  const css = document.createElement("link");

  css.rel = "stylesheet";
  css.href =
    "https://assets.calendly.com/assets/external/widget.css";

  document.head.appendChild(css);

  const script = document.createElement("script");

  script.src =
    "https://assets.calendly.com/assets/external/widget.js";

  script.onload = function () {
    Calendly.initPopupWidget({
      url: <?= json_encode(
        SITE_CALENDLY,
        JSON_UNESCAPED_SLASHES
      ) ?>
    });
  };

  document.body.appendChild(script);
}
</script>
<!-- End Calendly -->
<?php require __DIR__ . '/includes/footer.php'; ?>