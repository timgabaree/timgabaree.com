<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
$page = 'thank-you';
$bodyClass = 'hello-body';
$pageTitle = 'Thank You | Tim Gabaree';
$metaDescription = 'Thank you for contacting Tim Gabaree. Your message has been received and will be reviewed personally.';
$robots = 'noindex, follow';
$canonicalUrl = SITE_URL . '/thank-you.php';
$ogType = 'website';
$ogTitle = 'Thank You | Tim Gabaree';
$ogDescription = 'Your message has been received. Thank you for continuing the conversation with Tim Gabaree.';
$twitterDescription = 'Your message has been received. Thank you for continuing the conversation.';
require __DIR__ . '/includes/schema-thank-you.php';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main class="hello-page">
  <section
    class="hello-thank-you-section"
    aria-labelledby="hello-thank-you-title">
    <div class="hello-thank-you-card">
      <p class="hello-eyebrow"> Conversation Continued </p>
      <h1 id="hello-thank-you-title"> Thank you. </h1>
      <p class="hello-thank-you-lead"> Your message has been received successfully. </p>
      <p> Thank you for taking the time to reach out. I review each message
        personally and will respond as promptly as possible. </p>
      <p> In the meantime, you are welcome to return to my executive contact
        page, review my professional background, or connect with me directly
        on LinkedIn. </p>
      <div class="hello-thank-you-actions"> <a
  href="/hello.php"
  class="hello-thank-you-button"> Return to Contact Page </a> <a
          href="/"
          class="hello-thank-you-button"> View Executive Profile </a> </div>
      <hr>
      <div class="hello-thank-you-contact">
        <h2>Need to reach out directly?</h2>
        <div class="hello-thank-you-contact-links"> <a href="mailto:<?= e(SITE_EMAIL) ?>"> <span
      class="hello-thank-you-contact-icon"
      aria-hidden="true"> ✉ </span> <span>
          <?= e(SITE_EMAIL) ?>
          </span> </a> <a href="tel:<?= e(phoneHref(SITE_PHONE)) ?>"> <span
      class="hello-thank-you-contact-icon"
      aria-hidden="true"> ☎ </span> <span>
          <?= e(phoneDisplay(SITE_PHONE)) ?>
          </span> </a> <a
  href="<?= e(SITE_LINKEDIN) ?>"
  target="_blank"
  rel="me noopener noreferrer">
  <span
    class="hello-thank-you-contact-icon hello-linkedin-icon"
    aria-hidden="true">
    in
  </span>
  <span>Connect on LinkedIn</span>
</a> </div>
      </div>
    </div>
  </section>
</main>
<!-- Contact-form conversion event --> 
<script>
(function () {
  const params = new URLSearchParams(window.location.search);
  const submitted = params.get("submitted") === "1";
  const alreadyRecorded =
    sessionStorage.getItem(
      "hello_form_submission_recorded"
    ) === "true";
  if (!submitted || alreadyRecorded) {
    return;
  }
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({
    event: "hello_form_submission",
    form_name: "Continue the Conversation",
    form_location: "hello.php"
  });
  sessionStorage.setItem(
    "hello_form_submission_recorded",
    "true"
  );
})();
</script> 
<!-- End contact-form conversion event -->
<?php require __DIR__ . '/includes/footer.php'; ?>
