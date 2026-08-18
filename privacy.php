<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Page Configuration
|--------------------------------------------------------------------------
*/

$page =
    'privacy';

$bodyClass =
    'privacy-body';

$pageTitle =
    'Privacy Policy | Tim Gabaree';

$metaDescription =
    'Privacy Policy for timgabaree.com explaining what information may be collected, how it is used, and the privacy choices available to website visitors.';

$canonicalUrl =
    SITE_PRIVACY_URL;

/*
|--------------------------------------------------------------------------
| Open Graph
|--------------------------------------------------------------------------
*/

$ogType =
    'website';

$ogTitle =
    'Privacy Policy | Tim Gabaree';

$ogDescription =
    'Privacy Policy for timgabaree.com explaining how information may be collected, used, retained, and protected.';

$twitterDescription =
    'Privacy Policy for timgabaree.com explaining how visitor information may be collected and used.';

/*
|--------------------------------------------------------------------------
| Page Images
|--------------------------------------------------------------------------
*/

$pageImageKey =
    'profile';

$preloadImageKey =
    'background';

/*
|--------------------------------------------------------------------------
| Privacy Policy Metadata
|--------------------------------------------------------------------------
*/

$privacyModifiedIso =
    pageModified(
        $page
    );

$privacyModifiedDisplay =
    date(
        'F j, Y',
        strtotime(
            $privacyModifiedIso
        )
    );

/*
|--------------------------------------------------------------------------
| Page Includes
|--------------------------------------------------------------------------
*/

require_once __DIR__ .
    '/includes/components/component-head-defaults.php';

require __DIR__ .
    '/includes/schema/schema-privacy.php';

require __DIR__ .
    '/includes/components/component-head.php';

require __DIR__ .
    '/includes/components/component-header.php';

?>

<!-- Main -->

<main class="privacy-page">

  <?= siteImage(
      'background',
      [
          'class' =>
              'page-background-image',
      ]
  ) ?>

  <div class="privacy-container">

<!-- Privacy Policy Introduction -->

    <section
      class="privacy-card privacy-intro"
      aria-labelledby="privacy-title">

      <p class="privacy-eyebrow">
        Privacy &amp; Data Use
      </p>

      <h1 id="privacy-title">
        Privacy Policy
      </h1>

      <p class="privacy-updated">
        Last Updated:
        <time datetime="<?= e($privacyModifiedIso) ?>">
          <?= e($privacyModifiedDisplay) ?>
        </time>
      </p>

      <p>
        At timgabaree.com, your privacy is important. This Privacy
        Policy explains what information may be collected when you
        visit this website, how it is used, and the choices available
        to you.
      </p>

      <p>
        This website is intended to provide information about Tim
        Gabaree’s professional experience, leadership philosophy,
        consulting services, and board advisory work. Any personal
        information submitted through this website is used solely for
        responding to inquiries and maintaining professional
        communications.
      </p>

      <p>
        By using this website, you agree to the practices described in
        this Privacy Policy.
      </p>

    </section>

<!-- End Privacy Policy Introduction -->

<!-- Privacy Policy Contents -->

    <section
      id="privacy-contents"
      class="privacy-card privacy-contents"
      aria-labelledby="privacy-contents-title">

      <h2 id="privacy-contents-title">
        Contents
      </h2>

      <nav aria-label="Privacy Policy contents">

        <ol class="privacy-contents-list">

          <li>
            <a href="#information-collected-title">
              Information We Collect
            </a>
          </li>

          <li>
            <a href="#cookies-title">
              Cookies
            </a>
          </li>

          <li>
            <a href="#information-use-title">
              How Your Information Is Used
            </a>
          </li>

          <li>
            <a href="#third-party-title">
              Third-Party Services
            </a>
          </li>

          <li>
            <a href="#retention-title">
              Data Retention
            </a>
          </li>

          <li>
            <a href="#security-title">
              Data Security
            </a>
          </li>

          <li>
            <a href="#rights-title">
              Your Rights
            </a>
          </li>

          <li>
            <a href="#external-links-title">
              External Links
            </a>
          </li>

          <li>
            <a href="#changes-title">
              Changes to This Privacy Policy
            </a>
          </li>

          <li>
            <a href="#privacy-contact-title">
              Contact
            </a>
          </li>

        </ol>

      </nav>

    </section>

<!-- End Privacy Policy Contents -->

<!-- Information We Collect -->

    <section
      class="privacy-card"
      aria-labelledby="information-collected-title">

      <h2 id="information-collected-title">
        Information We Collect
      </h2>

      <h3>
        Information You Provide
      </h3>

      <p>
        If you choose to contact us through the website, we may collect
        information that you voluntarily provide, including:
      </p>

      <ul>
        <li>Name</li>
        <li>Email address</li>
        <li>Company, if provided</li>
        <li>Phone number, if provided</li>
        <li>Any information included in your message</li>
      </ul>

      <p>
        This information is used solely to respond to your inquiry or
        provide requested information.
      </p>

      <h3>
        Automatically Collected Information
      </h3>

      <p>
        Like most websites, certain information may be collected
        automatically when you visit the site. This may include:
      </p>

      <ul>
        <li>IP address</li>
        <li>Browser type and version</li>
        <li>Device information</li>
        <li>Pages visited</li>
        <li>Date and time of your visit</li>
        <li>Time spent on pages</li>
        <li>Referring website</li>
      </ul>

      <p>
        This information helps improve website performance, usability,
        and security.
      </p>

      <p class="privacy-return-to-contents">
        <a href="#privacy-contents">
          Return to Table of Contents
        </a>
      </p>

    </section>

<!-- End Information We Collect -->

<!-- Cookies -->

    <section
      class="privacy-card"
      aria-labelledby="cookies-title">

      <h2 id="cookies-title">
        Cookies
      </h2>

      <p>
        This website may use cookies or similar technologies to:
      </p>

      <ul>
        <li>Remember basic site preferences</li>
        <li>Measure website traffic</li>
        <li>Improve site functionality</li>
        <li>Understand how visitors use the website</li>
      </ul>

      <p>
        You can configure your browser to refuse cookies, although some
        website features may not function as intended.
      </p>

      <p class="privacy-return-to-contents">
        <a href="#privacy-contents">
          Return to Table of Contents
        </a>
      </p>

    </section>

<!-- End Cookies -->

<!-- How Your Information Is Used -->

    <section
      class="privacy-card"
      aria-labelledby="information-use-title">

      <h2 id="information-use-title">
        How Your Information Is Used
      </h2>

      <p>
        Information collected through this website may be used to:
      </p>

      <ul>
        <li>Respond to inquiries</li>
        <li>Communicate regarding requested information</li>
        <li>Improve website performance</li>
        <li>Monitor website security</li>
        <li>Analyze website usage</li>
        <li>Maintain and improve the visitor experience</li>
      </ul>

      <p>
        <strong>Your information is not sold to third parties.</strong>
      </p>

      <p class="privacy-return-to-contents">
        <a href="#privacy-contents">
          Return to Table of Contents
        </a>
      </p>

    </section>

<!-- End How Your Information Is Used -->

<!-- Third-Party Services -->

    <section
      class="privacy-card"
      aria-labelledby="third-party-title">

      <h2 id="third-party-title">
        Third-Party Services
      </h2>

      <p>
        This website may use trusted third-party services to support
        its operation. Depending on the features used, these services
        may include:
      </p>

      <ul>
        <li>Google Analytics</li>
        <li>Google Search Console</li>
        <li>Calendly</li>
        <li>LinkedIn</li>
        <li>DocSend</li>
        <li>GoDaddy Hosting</li>
        <li>Cloudflare</li>
      </ul>

      <p>
        These providers maintain their own privacy policies governing
        how they process information.
      </p>

      <p class="privacy-return-to-contents">
        <a href="#privacy-contents">
          Return to Table of Contents
        </a>
      </p>

    </section>

<!-- End Third-Party Services -->

<!-- Data Retention -->

    <section
      class="privacy-card"
      aria-labelledby="retention-title">

      <h2 id="retention-title">
        Data Retention
      </h2>

      <p>
        Information submitted through the website is retained only for
        as long as reasonably necessary to respond to inquiries,
        maintain business records, comply with legal obligations, or
        protect the security of the website.
      </p>

      <p class="privacy-return-to-contents">
        <a href="#privacy-contents">
          Return to Table of Contents
        </a>
      </p>

    </section>

<!-- End Data Retention -->

<!-- Data Security -->

    <section
      class="privacy-card"
      aria-labelledby="security-title">

      <h2 id="security-title">
        Data Security
      </h2>

      <p>
        Reasonable administrative and technical safeguards are used to
        protect information submitted through this website.
      </p>

      <p>
        However, no method of transmitting information over the
        Internet or storing electronic data can be guaranteed to be
        completely secure.
      </p>

      <p class="privacy-return-to-contents">
        <a href="#privacy-contents">
          Return to Table of Contents
        </a>
      </p>

    </section>

<!-- End Data Security -->

<!-- Your Rights -->

    <section
      class="privacy-card"
      aria-labelledby="rights-title">

      <h2 id="rights-title">
        Your Rights
      </h2>

      <p>
        Depending on your location, you may have the right to:
      </p>

      <ul>
        <li>
          Request access to personal information held about you
        </li>

        <li>
          Request correction of inaccurate information
        </li>

        <li>
          Request deletion of your personal information
        </li>

        <li>
          Withdraw consent where applicable
        </li>
      </ul>

      <p>
        Requests may be submitted using the contact information
        provided below.
      </p>

      <p class="privacy-return-to-contents">
        <a href="#privacy-contents">
          Return to Table of Contents
        </a>
      </p>

    </section>

<!-- End Your Rights -->

<!-- External Links -->

    <section
      class="privacy-card"
      aria-labelledby="external-links-title">

      <h2 id="external-links-title">
        External Links
      </h2>

      <p>
        This website contains links to external websites, including
        professional and social media platforms.
      </p>

      <p>
        Once you leave this website, those sites operate under their
        own privacy policies. We are not responsible for the privacy
        practices or content of third-party websites.
      </p>

      <p class="privacy-return-to-contents">
        <a href="#privacy-contents">
          Return to Table of Contents
        </a>
      </p>

    </section>

<!-- End External Links -->

<!-- Changes -->

    <section
      class="privacy-card"
      aria-labelledby="changes-title">

      <h2 id="changes-title">
        Changes to This Privacy Policy
      </h2>

      <p>
        This Privacy Policy may be updated periodically to reflect
        changes in website functionality, legal requirements, or
        privacy practices.
      </p>

      <p>
        The “Last Updated” date at the top of this page indicates when
        revisions were most recently made.
      </p>

      <p class="privacy-return-to-contents">
        <a href="#privacy-contents">
          Return to Table of Contents
        </a>
      </p>

    </section>

<!-- End Changes -->

<!-- Contact -->

    <section
      class="privacy-card privacy-contact"
      aria-labelledby="privacy-contact-title">

      <h2 id="privacy-contact-title">
        Contact
      </h2>

      <p>
        If you have questions about this Privacy Policy or wish to
        request access to or deletion of your personal information,
        please contact:
      </p>

      <address>
        <strong><?= e(SITE_NAME) ?></strong><br>

        <a href="mailto:<?= e(SITE_EMAIL) ?>">
          <?= e(SITE_EMAIL) ?>
        </a><br>

        <a href="tel:<?= e(phoneHref(SITE_PHONE)) ?>">
          <?= e(phoneDisplay(SITE_PHONE)) ?>
        </a>
      </address>

      <p>
        You may also submit a message through the
        <strong>
          <a href="<?= e(SITE_CONTACT_PATH) ?>">contact page</a>
        </strong>.
      </p>

      <p class="privacy-return-to-contents">
        <a href="#privacy-contents">
          Return to Table of Contents
        </a>
      </p>

    </section>

<!-- End Contact -->

<!-- Return -->

    <div class="privacy-return">

      <a
        class="primary-cta-button"
        href="<?= e(SITE_HOME_PATH) ?>">
        Return to Main Page
      </a>

    </div>

<!-- End Return -->

  </div>

</main>

<!-- End Main -->

<?php

require __DIR__ . '/includes/components/component-footer.php';

?>
