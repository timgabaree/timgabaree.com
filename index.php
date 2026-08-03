<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Page Configuration
|--------------------------------------------------------------------------
*/

$page = 'home';

$pageTitle =
    'Tim Gabaree | Portfolio CIO | Technology Value Creation | Enterprise Performance';

$metaDescription =
    'Tim Gabaree is a Portfolio CIO and technology executive helping organizations improve performance through technology value creation, governance, operating model transformation, and enterprise leadership.';

$canonicalUrl =
    SITE_URL . '/';

/*
|--------------------------------------------------------------------------
| Open Graph
|--------------------------------------------------------------------------
*/

$ogType = 'profile';

$ogTitle =
    'Tim Gabaree | Portfolio CIO | Technology Value Creation';

$ogDescription =
    'Tim Gabaree is a Portfolio CIO and technology executive helping organizations improve performance through governance, technology value creation, and operating model transformation.';

/*
|--------------------------------------------------------------------------
| Performance
|--------------------------------------------------------------------------
*/

$preloadImage =
    '/media/background-pic-architecture-1920x942.webp';

/*
|--------------------------------------------------------------------------
| Page Includes
|--------------------------------------------------------------------------
*/

require __DIR__ . '/includes/schema/schema-home.php';
require __DIR__ . '/includes/components/component-head.php';
require __DIR__ . '/includes/components/component-header.php';

?>

<main id="main-content">

  <!-- Intro Section -->
  <section
    id="home"
    class="section-wrapper"
    aria-labelledby="home-title">

    <div
      id="intro"
      class="intro-section">

      <div class="intro-text-content-block">

        <header class="intro-title-block">

          <h1
            id="home-title"
            class="intro-title">
            <?= e(SITE_NAME) ?>
          </h1>

          <p class="intro-subtitle">
            Portfolio CIO
            <span aria-hidden="true"> | </span>
            Technology Value Creation
            <span aria-hidden="true"> | </span>
            Enterprise Performance
          </p>

        </header>

        <div class="intro-main-text-block">

          <p>
            <strong>
              Governance
              <span aria-hidden="true"> | </span>
              Operating Model Transformation
              <span aria-hidden="true"> | </span>
              Scalable Growth
            </strong>
          </p>

          <p>
            Converting strategy into execution by aligning technology,
            operations, investment, and risk management. Improving
            performance, reducing complexity, and strengthening governance.
          </p>

          <p class="intro-cta-text">
            Whether you're exploring executive leadership, board
            opportunities, advisory work, or technology transformation,
            I'd welcome the opportunity to connect.
          </p>

          <a
            class="primary-cta-button"
            href="/contact.php">
            Continue the Conversation
          </a>

        </div>

        <section
          class="intro-links-block"
          aria-labelledby="executive-documents-title">

          <h2
            id="executive-documents-title"
            class="intro-links-heading">
            Resources
          </h2>

          <ul class="intro-links-list">

            <li>
              <a
                href="<?= e(DOCSEND_EXECUTIVE_PROFILE) ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="intro-links">

                Executive Profile

                <span class="visually-hidden">
                  — opens in a new tab
                </span>

              </a>
            </li>

            <li>
              <a
                href="<?= e(DOCSEND_RESUME) ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="intro-links">

                Résumé

                <span class="visually-hidden">
                  — opens in a new tab
                </span>

              </a>
            </li>

            <li>
              <a
                href="<?= e(DOCSEND_EXECUTIVE_BIO) ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="intro-links">

                Executive Bio

                <span class="visually-hidden">
                  — opens in a new tab
                </span>

              </a>
            </li>

            <li>
              <a
                href="<?= e(DOCSEND_BOARD_RESUME) ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="intro-links">

                Board Résumé

                <span class="visually-hidden">
                  — opens in a new tab
                </span>

              </a>
            </li>

            <li>
              <a
                href="<?= e(DOCSEND_BOARD_BIO) ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="intro-links">

                Board Bio

                <span class="visually-hidden">
                  — opens in a new tab
                </span>

              </a>
            </li>

          </ul>

        </section>

      </div>

      <div class="intro-profile-picture-block">

        <img
          class="intro-profile-picture-img main-img"
          src="/media/profile-pic-tim-gabaree-900x1200.webp"
          alt="Tim Gabaree"
          width="900"
          height="1200"
          loading="eager"
          fetchpriority="high"
          decoding="async">

        <img
          class="intro-profile-picture-img hover-img"
          src="/media/profile-pic-tim-gabaree-in-the-morning-400x534.webp"
          alt=""
          width="400"
          height="534"
          loading="lazy"
          decoding="async"
          aria-hidden="true">

      </div>

    </div>

  </section>
  <!-- End Intro Section -->

  <!-- Results Preview Section -->
  <section
    class="section-wrapper"
    aria-labelledby="results-preview-title">

    <div
      id="results"
      class="results-carousel-section">

      <h2
        id="results-preview-title"
        class="visually-hidden">
        Selected Operating Results Preview
      </h2>

      <!--
        The animated slides provide a visual preview of information
        presented in full in the Selected Operating Results section.
        They are hidden from assistive technology to avoid duplicate
        announcements.
      -->
      <div
        id="results-carousel"
        class="results-carousel"
        aria-hidden="true">

        <div class="results-slide slide-1">

          <p class="results-kicker">
            Operating Result
          </p>

          <p class="results-number">
            $115M
          </p>

          <p class="results-label">
            Program Stabilized
          </p>

          <p class="results-detail">
            Operational recovery | Stakeholder alignment | Continuity
          </p>

        </div>

        <div class="results-slide slide-2">

          <p class="results-kicker">
            Operating Result
          </p>

          <p class="results-number">
            $25M+
          </p>

          <p class="results-label">
            Savings Delivered
          </p>

          <p class="results-detail">
            Modernization | Governance | Cost discipline
          </p>

        </div>

        <div class="results-slide slide-3">

          <p class="results-kicker">
            Operating Result
          </p>

          <p class="results-number">
            $80M
          </p>

          <p class="results-label">
            Mission-Critical Program Delivered
          </p>

          <p class="results-detail">
            Security | Compliance | Execution risk reduction
          </p>

        </div>

        <div class="results-slide slide-4">

          <p class="results-kicker">
            Leadership Result
          </p>

          <p class="results-number">
            96%
          </p>

          <p class="results-label">
            Workforce Retention
          </p>

          <p class="results-detail">
            Organizational redesign | Leadership development | Performance
          </p>

        </div>

        <div class="results-slide slide-5">

          <p class="results-kicker">
            Positioning
          </p>

          <p class="results-number">
            Portfolio CIO
          </p>

          <p class="results-label">
            Governance | Technology Value Creation | Enterprise Performance
          </p>

          <p class="results-detail">
            Aligning technology, operations, investment, and risk management.
          </p>

        </div>

      </div>

      <div class="results-carousel-controls">

        <button
          id="results-animation-toggle"
          class="results-animation-toggle"
          type="button"
          aria-controls="results-carousel"
          aria-pressed="false">
          Pause animation
        </button>

        <a
          class="results-preview-link"
          href="#experience">
          View selected operating results
        </a>

      </div>

    </div>

  </section>
  <!-- End Results Preview Section -->

  <!-- Expertise Section -->
  <div class="section-wrapper">

    <section
      id="expertise"
      class="expertise-section"
      aria-labelledby="expertise-title">

      <div class="expertise-heading-block">

        <h2
          id="expertise-title"
          class="expertise-heading">
          Expertise
        </h2>

      </div>

      <div class="expertise-container">

        <div class="expertise-text-block">

          <ul class="expertise-list">
            <li>Technology Value Creation</li>
            <li>Technology &amp; Operations Leadership</li>
            <li>Enterprise Performance</li>
            <li>Private Equity Portfolio Operations</li>
            <li>Operating Model Transformation</li>
            <li>Post-Acquisition Integration</li>
            <li>Governance &amp; Risk Management</li>
            <li>AI &amp; Data Strategy</li>
            <li>Vendor Rationalization</li>
            <li>Infrastructure &amp; Cloud Operations</li>
          </ul>

        </div>

        <!-- Decorative image supporting the expertise section -->
        <div
          class="expertise-image-block"
          aria-hidden="true">
        </div>

      </div>

    </section>

  </div>
  <!-- End Expertise Section -->

  <!-- Operating Results Section -->
  <?php

  $sectionId = 'experience';

  $sectionTitle =
      'Selected Operating Results';

  $sectionIntro =
      'Enterprise leadership across private equity-backed, government, healthcare, defense, and mid-market organizations. These selected results reflect recovery, savings, modernization, integration, and operational scale.';

  $sectionItems = [
      [
          'title' =>
              'Delivered more than $25 million in savings',
          'description' =>
              'Achieved through vendor rationalization, analytics, and cost discipline.',
      ],
      [
          'title' =>
              'Stabilized a $115 million at-risk federal program',
          'description' =>
              'Restored performance through operational recovery and stakeholder alignment.',
      ],
      [
          'title' =>
              'Led modernization across environments valued at more than $100 million',
          'description' =>
              'Directed initiatives spanning technology, cybersecurity, compliance, and data strategy.',
      ],
      [
          'title' =>
              'Increased billable utilization from 60% to 93%',
          'description' =>
              'Improved operating performance while generating $2 million in additional revenue.',
      ],
      [
          'title' =>
              'Raised workforce retention to 96%',
          'description' =>
              'Strengthened organizational performance through redesign and leadership development.',
      ],
      [
          'title' =>
              'Delivered an $80 million mission-critical federal program',
          'description' =>
              'Improved margins while reducing delivery and execution risk.',
      ],
      [
          'title' =>
              'Reduced operating costs across Department of Defense programs',
          'description' =>
              'Achieved efficiencies through consolidation and modernization.',
      ],
      [
          'title' =>
              'Aligned capital allocation and technology investment priorities',
          'description' =>
              'Connected investment decisions with broader enterprise objectives.',
      ],
  ];

  require __DIR__ .
      '/includes/components/component-section-card.php';

  unset(
      $sectionId,
      $sectionTitle,
      $sectionIntro,
      $sectionItems
  );

  ?>
  <!-- End Operating Results Section -->

  <!-- Board and Advisory Section -->
  <?php

  $sectionId = 'board';

  $sectionTitle =
      'Board & Advisory Experience';

  $sectionIntro =
      'Board and advisory experience supporting governance, strategy, organizational performance, and sustainable growth across nonprofit, consulting, and international business environments.';

  $sectionItems = [
      [
          'title' =>
              'Independent Board Director | EMAXIQ',
          'description' =>
              'Advises leadership on corporate strategy, platform direction, governance, and international expansion for a digital consultancy and executive collaboration platform.',
      ],
      [
          'title' =>
              'Independent Board Director | Marian Homes',
          'description' =>
              'Supported financial stewardship, fundraising, governance, and long-term planning for a nonprofit serving adults with intellectual disabilities.',
      ],
      [
          'title' =>
              'Board Advisor | Chicago House Athletic Club',
          'description' =>
              'Advised organizational leadership on strategy, operating priorities, governance, and stakeholder engagement supporting continued growth.',
      ],
  ];

  require __DIR__ .
      '/includes/components/component-section-card.php';

  unset(
      $sectionId,
      $sectionTitle,
      $sectionIntro,
      $sectionItems
  );

  ?>
<!-- End Board and Advisory Section -->

<!-- Education Section -->
<div class="section-wrapper">

  <section
    id="education"
    class="education-section"
    aria-labelledby="education-title">

    <div class="education-heading-block">

      <h2
        id="education-title"
        class="education-heading">
        Education
      </h2>

    </div>

    <div class="education-content">

      <?php

      $educationItems = [
          [
              'degree' =>
                  'Master of Business Administration',
              'institution' =>
                  'University of Illinois Springfield',
              'url' =>
                  'https://www.uis.edu/',
              'logo' =>
                  '/media/education-logo-university-of-illinois-springfield-500x250.webp',
              'logo_width' =>
                  500,
              'logo_height' =>
                  250,
          ],
          [
              'degree' =>
                  'Bachelor of Science in Analytics',
              'institution' =>
                  'Purdue University Global',
              'url' =>
                  'https://www.purdueglobal.edu/',
              'logo' =>
                  '/media/education-logo-purdue-university-global-500x137.webp',
              'logo_width' =>
                  500,
              'logo_height' =>
                  137,
          ],
      ];

      foreach ($educationItems as $educationItem) {
          $educationDegree =
              $educationItem['degree'];

          $educationInstitution =
              $educationItem['institution'];

          $educationUrl =
              $educationItem['url'];

          $educationLogo =
              $educationItem['logo'];

          $educationLogoWidth =
              $educationItem['logo_width'];

          $educationLogoHeight =
              $educationItem['logo_height'];

          require __DIR__ .
              '/includes/components/component-education-card.php';
      }

      unset(
          $educationItems,
          $educationItem,
          $educationDegree,
          $educationInstitution,
          $educationUrl,
          $educationLogo,
          $educationLogoWidth,
          $educationLogoHeight
      );

      ?>

    </div>

  </section>

</div>
<!-- End Education Section -->

  <!-- Leadership Perspective Section -->
  <div class="section-wrapper">

    <section
      id="q-and-a"
      class="qanda-section"
      aria-labelledby="leadership-perspective-title">

      <div class="qanda-heading-block">

        <h2
          id="leadership-perspective-title"
          class="qanda-heading">
          Leadership Perspective
        </h2>

      </div>

      <div class="qanda-content">

        <article class="qanda-block">

          <h3 class="qanda-question">
            Why did you choose your profession?
          </h3>

          <p class="qanda-answer">
            I got my first computer at 11 after saving money from a paper
            route and neighborhood jobs. Learning how it worked sparked an
            interest that eventually became a career helping organizations
            improve performance, modernize operations, and navigate change.
          </p>

        </article>

        <article class="qanda-block">

          <h3 class="qanda-question">
            What personal experience shaped how you lead?
          </h3>

          <p class="qanda-answer">
            Losing my father at a young age after a stroke shaped how I view
            leadership, family, resilience, and gratitude. It taught me to
            lead with perspective, stay grounded under pressure, and make
            the most of the opportunities in front of me.
          </p>

        </article>

        <article class="qanda-block">

          <h3 class="qanda-question">
            How would your peers and team members describe your
            responsiveness as a leader?
          </h3>

          <p class="qanda-answer">
            My leadership approach was heavily influenced by my military
            background and years leading teams through complex operational
            environments. I believe in accountability, transparency, and
            giving people the context and trust needed to succeed. Teams
            perform best when expectations are clear, communication is
            direct, and individuals feel ownership in the outcome.
          </p>

          <p class="qanda-answer">
            Peers and team members often describe me as calm under pressure,
            operationally focused, and approachable. I work to create
            environments where people can grow, solve problems
            collaboratively, and stay aligned around shared objectives.
          </p>

        </article>

      </div>

    </section>

  </div>
  <!-- End Leadership Perspective Section -->

  <!-- Testimonials Section -->
<div class="section-wrapper">

  <section
    id="testimonials"
    class="testimonials-section"
    aria-labelledby="testimonials-title">

    <div class="testimonials-heading-block">

      <h2
        id="testimonials-title"
        class="testimonials-heading">
        Testimonials
      </h2>

    </div>

    <div class="testimonials-list-wrapper">

      <div class="testimonials-list">

        <?php

        $testimonials = [
            [
                'quote' =>
                    'Tim brings strategic insight and sound judgment to every challenge. He’s a trusted advisor who sees the big picture, communicates clearly, and drives aligned action across stakeholders. Visionary, tenacious, and highly professional, Tim leads with purpose and delivers results.',
                'name' =>
                    'Scott A. Smith',
                'title' =>
                    'President & CEO',
                'organization' =>
                    'thinQtank Global, Inc.',
            ],
            [
                'quote' =>
                    'Tim guided our Project Engineering Team through the busiest site refresh season in our company’s history. His organizational skill and adaptability kept projects on schedule while helping grow the bottom line. He took care of his employees, cared about work-life balance, and stayed focused on getting the job done.',
                'name' =>
                    'Stephen Mouser',
                'title' =>
                    'Network OPS QA Manager',
                'organization' =>
                    'Apogee, Inc.',
            ],
            [
                'quote' =>
                    'Tim was never afraid to step in and keep a project moving when others had thrown in the towel. His problem-solving ability and operational focus consistently helped teams deliver successful outcomes under pressure.',
                'name' =>
                    'Dan Southwick',
                'title' =>
                    'Principal ProdOps Engineer',
                'organization' =>
                    'Research Innovations Incorporated',
            ],
            [
                'quote' =>
                    'Tim consistently demonstrated discipline, adaptability, and strong operational leadership. His communication, collaboration, and organizational skills were instrumental in growing and stabilizing DOJ operational environments. He also has a genuine talent for mentoring teams and building strong working relationships.',
                'name' =>
                    'Michael Cook',
                'title' =>
                    'Network Manager',
                'organization' =>
                    'ITC Federal',
            ],
            [
                'quote' =>
                    'Tim stands out for his research skills, adaptability, and ability to lead teams through modernization efforts. His contributions to DOJ modernization initiatives were invaluable. I highly recommend Tim for any organization looking to improve efficiency, resilience, and operational performance.',
                'name' =>
                    'Steve Joo',
                'title' =>
                    'IT Cybersecurity Specialist (Network)',
                'organization' =>
                    'U.S. Department of Justice',
            ],
            [
                'quote' =>
                    'Tim consistently helped the organization save significant resources and improve operational efficiency. He is a strong leader who ensures his teams have the training, experience, and confidence needed to make sound decisions.',
                'name' =>
                    'Roderick Adams',
                'title' =>
                    'Government Lead, Network Services',
                'organization' =>
                    'Executive Office for Immigration Review, Office of Information Technology',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            $testimonialQuote =
                $testimonial['quote'];

            $testimonialName =
                $testimonial['name'];

            $testimonialTitle =
                $testimonial['title'];

            $testimonialOrganization =
                $testimonial['organization'];

            require __DIR__ .
                '/includes/components/component-testimonial-card.php';
        }

        unset(
            $testimonials,
            $testimonial,
            $testimonialQuote,
            $testimonialName,
            $testimonialTitle,
            $testimonialOrganization
        );

        ?>

      </div>

    </div>

  </section>

</div>
<!-- End Testimonials Section -->

<!-- Home Page Navigation -->
<section
  class="home-navigation"
  aria-labelledby="home-navigation-title">

  <h2
    id="home-navigation-title"
    class="visually-hidden">
    Continue Exploring
  </h2>

  <div class="home-navigation-buttons">

    <a
      href="/about"
      class="home-navigation-button">
      About Me
    </a>

    <a
      href="/contact"
      class="home-navigation-button home-navigation-button-primary">
      Continue the Conversation
    </a>

  </div>

</section>
<!-- End Home Page Navigation -->
	
<!-- Contact Section -->
  <div class="section-wrapper">

    <section
      id="contact"
      class="contact-section"
      aria-labelledby="home-contact-title">

      <div class="contact-class">

        <h2
          id="home-contact-title"
          class="visually-hidden">
          Contact Tim Gabaree
        </h2>

        <div class="qr-code-block">

          <a
            href="/contact.php"
            aria-label="Open Tim Gabaree’s contact page">

            <img
              src="/media/qr-code-tim-gabaree-500x500.webp"
              alt="QR code to Tim Gabaree’s contact page"
              width="500"
              height="500"
              loading="lazy"
              decoding="async">

          </a>

        </div>

        <div class="contact-block">

          <address class="contact-content">

            <span>
              <?= e(SITE_NAME) ?>
            </span>

            <span>
              <a
                href="tel:<?= e(phoneHref(SITE_PHONE)) ?>"
                class="contactLink">
                <?= e(phoneDisplay(SITE_PHONE)) ?>
              </a>
            </span>

            <span>
              <a
                href="mailto:<?= e(SITE_EMAIL) ?>"
                class="contactLink">
                <?= e(SITE_EMAIL) ?>
              </a>
            </span>

          </address>

        </div>

      </div>

    </section>

  </div>
  <!-- End Contact Section -->

</main>

<!-- Results Carousel Controls -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const carousel =
    document.querySelector("#results-carousel");

  const toggleButton =
    document.querySelector("#results-animation-toggle");

  if (!carousel || !toggleButton) {
    return;
  }

  toggleButton.addEventListener("click", function () {
    const isPaused =
      carousel.classList.toggle("is-paused");

    toggleButton.setAttribute(
      "aria-pressed",
      String(isPaused)
    );

    toggleButton.textContent =
      isPaused
        ? "Resume animation"
        : "Pause animation";
  });
});
</script>
<!-- End Results Carousel Controls -->

<?php

require __DIR__ .
    '/includes/components/component-footer.php';

?>