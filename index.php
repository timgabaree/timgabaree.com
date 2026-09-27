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
    'home';

/*
|--------------------------------------------------------------------------
| Page Start
|--------------------------------------------------------------------------
*/

require __DIR__ .
    '/includes/components/component-page-start.php';

?>

<main id="main-content">

<!-- Intro Section -->

  <section
    id="home"
    class="home-section-wrapper"
    aria-labelledby="home-title">

    <div
      id="intro"
      class="home-intro-section">

      <?= siteImage(
          'background',
          [
              'class' => 'home-section-background-image',
          ]
      ) ?>

      <div class="home-intro-text-content-block">

        <header class="home-intro-title-block">

          <h1
            id="home-title"
            class="home-intro-title">
            <?= e(SITE_NAME) ?>
          </h1>

          <p class="home-intro-subtitle">
            CIO & Technology Executive
            <span aria-hidden="true"> · </span>
              AI Strategy & Enablement
            <span aria-hidden="true"> · </span>
              Cybersecurity
            <span aria-hidden="true"> · </span>
              Technology Value Creation
          </p>

        </header>

        <div class="home-intro-main-text-block">

          <p>
            <strong>
              Enterprise Technology Strategy
              <span aria-hidden="true"> · </span>
              Enterprise Modernization
              <span aria-hidden="true"> · </span>
              Technology & Operations Leadership
            </strong>
          </p>

          <p class="home-intro-cta-text">
              Translating technology complexity into clear business decisions.
          </p>

         <p class="home-intro-cta-text">
              Aligning technology investment with business priorities to improve performance,
              strengthen resilience, manage risk, and create enterprise value. Leading modernization
              and operational recovery across complex organizations, with experience spanning AI strategy,
              cybersecurity, infrastructure and operations, and operating model improvement.
          </p>

          <p class="home-intro-cta-text">
              I work with executives and boards navigating technology strategy,
              transformation, risk, and enterprise performance.
          </p>

          <a
            class="primary-cta-button"
            href="<?= e(SITE_CONTACT_PATH) ?>">

            Continue the Conversation
          </a>

        </div>

        <section
          class="home-intro-links-block"
          aria-labelledby="executive-documents-title">

          <h2
            id="executive-documents-title"
            class="home-intro-links-heading">
            Executive Portfolio
          </h2>

          <p class="home-intro-links-description">
            Executive and board materials highlighting my leadership experience,
            enterprise technology strategy, cybersecurity, and value creation.
          </p>

          <ul class="home-intro-links-list">

            <li>
              <a
                href="<?= e(DOCSEND_EXECUTIVE_PROFILE) ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="home-intro-links">

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
                class="home-intro-links">

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
                class="home-intro-links">

                Executive Biography

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
                class="home-intro-links">

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
                class="home-intro-links">

                Board Biography

                <span class="visually-hidden">
                  — opens in a new tab
                </span>

              </a>
            </li>

          </ul>

        </section>

      </div>

      <div class="home-intro-profile-picture-block">

        <?= siteImage(
            'profile',
            [
                'class' => 'home-intro-profile-picture-img home-intro-profile-picture-img-main',
            ]
        ) ?>

        <?= siteImage(
            'profile_hover',
            [
                'class' => 'home-intro-profile-picture-img home-intro-profile-picture-img-hover',
            ]
        ) ?>

      </div>

    </div>

  </section>

<!-- End Intro Section -->

<!-- Results Preview Section -->

  <section
    class="home-section-wrapper"
    aria-labelledby="results-preview-title">

    <div
      id="results"
      class="home-results-carousel-section">

      <h2
        id="results-preview-title"
        class="visually-hidden">
        Selected Operating Results Preview
      </h2>

<!--
|--------------------------------------------------------------------------
| Results Carousel Accessibility
|--------------------------------------------------------------------------
|
| The animated slides provide a visual preview of information presented
| in full in the Selected Operating Results section. They are hidden from
| assistive technology to avoid duplicate announcements.
|
-->

      <div
        id="results-carousel"
        class="home-results-carousel"
        aria-hidden="true">

        <div class="home-results-slide home-results-slide-1">

          <?= siteImage(
              'results_left',
              [
                  'class' => 'home-results-slide-image',
              ]
          ) ?>

          <p class="home-results-kicker">
            Operating Result
          </p>

          <p class="home-results-number">
            $115M
          </p>

          <p class="home-results-label">
            Program Stabilized
          </p>

          <p class="home-results-detail">
            Operational recovery · Stakeholder alignment · Continuity
          </p>

        </div>

        <div class="home-results-slide home-results-slide-2">

          <?= siteImage(
              'results_middle',
              [
                  'class' => 'home-results-slide-image',
              ]
          ) ?>

          <p class="home-results-kicker">
            Operating Result
          </p>

          <p class="home-results-number">
            $25M
          </p>

          <p class="home-results-label">
            Projected Savings Identified
          </p>

          <p class="home-results-detail">
            Modernization · Analytics · Financial controls
          </p>

        </div>

        <div class="home-results-slide home-results-slide-3">

          <?= siteImage(
              'results_right',
              [
                  'class' => 'home-results-slide-image',
              ]
          ) ?>

          <p class="home-results-kicker">
            Operating Result
          </p>

          <p class="home-results-number">
            $80M
          </p>

          <p class="home-results-label">
            Mission-Critical Program Delivered
          </p>

          <p class="home-results-detail">
            Security · Compliance · Execution risk reduction
          </p>

        </div>

        <div class="home-results-slide home-results-slide-4">

          <?= siteImage(
              'results_left',
              [
                  'class' => 'home-results-slide-image',
              ]
          ) ?>

          <p class="home-results-kicker">
            Leadership Result
          </p>

          <p class="home-results-number">
            96%
          </p>

          <p class="home-results-label">
            Workforce Retention
          </p>

          <p class="home-results-detail">
            Organizational redesign · Leadership development · Performance
          </p>

        </div>

        <div class="home-results-slide home-results-slide-5">

          <?= siteImage(
              'results_middle',
              [
                  'class' => 'home-results-slide-image',
              ]
          ) ?>

          <p class="home-results-kicker">
            Executive Leadership
          </p>

          <p class="home-results-number">
            CIO & Technology Executive
          </p>

          <p class="home-results-label">
            AI Strategy · Cybersecurity · Technology Value Creation
          </p>

          <p class="home-results-detail">
            Aligning technology investment, operations, and risk with business priorities.
          </p>

        </div>

      </div>

      <div class="home-results-carousel-controls">

        <button
          id="results-animation-toggle"
          class="home-results-animation-toggle"
          type="button"
          aria-controls="results-carousel"
          aria-pressed="false">
          Pause animation
        </button>

        <a
          class="home-results-preview-link"
          href="#operating-results">
          View selected operating results
        </a>

      </div>

    </div>

  </section>

<!-- End Results Preview Section -->

<!-- Expertise Section -->

  <div class="home-section-wrapper">

    <section
      id="expertise"
      class="home-expertise-section"
      aria-labelledby="expertise-title">

      <div class="home-expertise-heading-block">

        <h2
          id="expertise-title"
          class="home-expertise-heading">
          Expertise
        </h2>

      </div>

      <div class="home-expertise-container">

        <div class="home-expertise-text-block">

          <ul class="home-expertise-list">
            <li>AI Strategy &amp; Enablement</li>
            <li>Cybersecurity &amp; Enterprise Risk</li>
            <li>Technology Value Creation</li>
            <li>Enterprise Technology Strategy</li>
            <li>Infrastructure &amp; Cloud Strategy</li>
            <li>Enterprise Modernization</li>
            <li>Technology &amp; Operations Leadership</li>
            <li>IT Operating Models</li>
            <li>Vendor &amp; Service Performance</li>
            <li>Post-Acquisition Integration</li>
          </ul>

        </div>

<!--
|--------------------------------------------------------------------------
| Decorative Expertise Image
|--------------------------------------------------------------------------
|
| This image supports the visual presentation of the Expertise section
| and is intentionally hidden from assistive technology.
|
-->

        <div
          class="home-expertise-image-block"
          aria-hidden="true">

          <?= siteImage(
              'expertise',
              [
                  'class' => 'home-expertise-image',
              ]
          ) ?>

        </div>

      </div>

    </section>

  </div>

<!-- End Expertise Section -->

<!-- Operating Results Section -->

  <?php

  $sectionId = 'operating-results';

  $sectionTitle =
      'Selected Operating Results';

  $sectionIntro =
      'Enterprise leadership across private equity-backed, government, healthcare, defense, and mid-market organizations. These selected results reflect operational recovery, modernization, financial discipline, technology value creation, and organizational performance.';

  $sectionItems = [
      [
          'title' => 'Identified $25 million in projected savings',
          'description' => 'Identified through modernization, analytics, and financial controls.',
      ],
      [
          'title' => 'Stabilized a $115 million at-risk federal program',
          'description' => 'Restored performance through operational recovery and stakeholder alignment.',
      ],
      [
          'title' => 'Directed a $170 million technology portfolio',
          'description' => 'Spanned infrastructure, applications, enterprise risk, and technology operations across a complex government environment.',
      ],
      [
          'title' => 'Increased billable utilization from 60% to 93%',
          'description' => 'Improved operating performance while generating $2 million in additional revenue.',
      ],
      [
          'title' => 'Raised workforce retention to 96%',
          'description' => 'Improved workforce stability while strengthening service delivery and organizational performance.',
      ],
      [
          'title' => 'Delivered an $80 million mission-critical federal program',
          'description' => 'Delivered a secure federal facility while improving margins.',
      ],
      [
          'title' => 'Reduced data center operating costs by $250,000 annually',
          'description' => 'Consolidated Department of Defense R&D data centers into a private cloud environment.',
      ],
      [
          'title' => 'Identified $1.5 million in duplicate vendor spend',
          'description' => 'Assessed vendor portfolios across multiple businesses to identify duplication and rationalization opportunities.',
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
      'Board & Advisory';

  $sectionIntro =
      'Board and advisory service bringing an operator’s perspective to technology, enterprise risk, organizational performance, strategic priorities, and long-term value creation.';

  $sectionItems = [
      [
          'title' => 'Independent Board Director | EMAXIQ',
          'description' =>
              'Strategic oversight supporting technology, AI, international growth, and enterprise risk.',
      ],
      [
          'title' => 'Independent Board Director | Marian Homes',
          'description' =>
              'Strategic oversight supporting mission, accountability, and financial stewardship.',
      ],
      [
          'title' => 'Board Advisor | Chicago House Athletic Club',
          'description' =>
              'Strategic advice on organizational priorities, performance, and sustainable growth.',
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

  <div class="home-section-wrapper">

    <section
      id="education"
      class="home-education-section"
      aria-labelledby="education-title">

      <div class="home-education-heading-block">

        <h2
          id="education-title"
          class="home-education-heading">
          Education
        </h2>

      </div>

      <div class="home-education-content">

        <?php

        $educationItems = [
            [
                'degree' => 'Master of Business Administration',

                'institution' => 'University of Illinois Springfield',

                'url' => 'https://www.uis.edu/',

                'logo_image' => 'education_uis_logo',

                'background_image' => 'education_uis_background',
            ],

            [
                'degree' => 'Bachelor of Science in Analytics',

                'institution' => 'Purdue University Global',

                'url' => 'https://www.purdueglobal.edu/',

                'logo_image' => 'education_purdue_logo',

                'background_image' => 'education_purdue_background',
            ],
        ];

        foreach ($educationItems as $educationItem) {
            $educationDegree =
                $educationItem['degree'];

            $educationInstitution =
                $educationItem['institution'];

            $educationUrl =
                $educationItem['url'];

            $educationBackgroundImage =
                $educationItem['background_image'];

            $educationLogoImage =
                $educationItem['logo_image'];

            require __DIR__ .
                '/includes/components/component-education-card.php';
        }

        unset(
            $educationItems,
            $educationItem,
            $educationDegree,
            $educationInstitution,
            $educationUrl,
            $educationBackgroundImage,
            $educationLogoImage
        );

        ?>

      </div>

    </section>

  </div>

<!-- End Education Section -->

<!-- Leadership Perspective Section -->

  <div class="home-section-wrapper">

    <section
      id="q-and-a"
      class="home-qanda-section"
      aria-labelledby="leadership-perspective-title">

      <div class="home-qanda-heading-block">

        <h2
          id="leadership-perspective-title"
          class="home-qanda-heading">
          Leadership Perspective
        </h2>

      </div>

      <div class="home-qanda-content">

        <article class="home-qanda-block">

          <h3 class="home-qanda-question">
            Why did you choose your profession?
          </h3>

          <p class="home-qanda-answer">
            I got my first computer at 11 after saving money from a paper
            route and neighborhood jobs. Learning how it worked sparked an
            interest that eventually became a career helping organizations
            improve performance, modernize operations, and navigate change.
          </p>

        </article>

        <article class="home-qanda-block">

          <h3 class="home-qanda-question">
            What personal experience shaped how you lead?
          </h3>

          <p class="home-qanda-answer">
            Losing my father at a young age after a stroke shaped how I view
            leadership, family, resilience, and gratitude. It taught me to
            lead with perspective, stay grounded under pressure, and make
            the most of the opportunities in front of me.
          </p>

        </article>

        <article class="home-qanda-block">

          <h3 class="home-qanda-question">
            How would your peers and team members describe your
            responsiveness as a leader?
          </h3>

          <p class="home-qanda-answer">
            My leadership approach was heavily influenced by my military
            background and years leading teams through complex operational
            environments. I believe in accountability, transparency, and
            giving people the context and trust needed to succeed. Teams
            perform best when expectations are clear, communication is
            direct, and individuals feel ownership in the outcome.
          </p>

          <p class="home-qanda-answer">
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

  <div class="home-section-wrapper">

    <section
      id="testimonials"
      class="home-testimonials-section"
      aria-labelledby="testimonials-title">

      <div class="home-testimonials-heading-block">

        <h2
          id="testimonials-title"
          class="home-testimonials-heading">
          Testimonials
        </h2>

      </div>

      <div class="home-testimonials-list-wrapper">

        <div class="home-testimonials-list">

          <?php

          $testimonials = [
              [
                  'quote' =>
                      'Tim brings strategic insight and sound judgment to every challenge. He’s a trusted advisor who sees the big picture, communicates clearly, and drives aligned action across stakeholders. Visionary, tenacious, and highly professional, Tim leads with purpose and delivers results.',
                  'name' => 'Scott A. Smith',
                  'title' => 'President & CEO',
                  'organization' => 'thinQtank Global, Inc.',
              ],
              [
                  'quote' =>
                      'Tim guided our Project Engineering Team through the busiest site refresh season in our company’s history. His organizational skill and adaptability kept projects on schedule while helping grow the bottom line. He took care of his employees, cared about work-life balance, and stayed focused on getting the job done.',
                  'name' => 'Stephen Mouser',
                  'title' => 'Network OPS QA Manager',
                  'organization' => 'Apogee, Inc.',
              ],
              [
                  'quote' =>
                      'Tim was never afraid to step in and keep a project moving when others had thrown in the towel. His problem-solving ability and operational focus consistently helped teams deliver successful outcomes under pressure.',
                  'name' => 'Dan Southwick',
                  'title' => 'Principal ProdOps Engineer',
                  'organization' => 'Research Innovations Incorporated',
              ],
              [
                  'quote' =>
                      'Tim consistently demonstrated discipline, adaptability, and strong operational leadership. His communication, collaboration, and organizational skills were instrumental in growing and stabilizing DOJ operational environments. He also has a genuine talent for mentoring teams and building strong working relationships.',
                  'name' => 'Michael Cook',
                  'title' => 'Network Manager',
                  'organization' => 'ITC Federal',
              ],
              [
                  'quote' =>
                      'Tim stands out for his research skills, adaptability, and ability to lead teams through modernization efforts. His contributions to DOJ modernization initiatives were invaluable. I highly recommend Tim for any organization looking to improve efficiency, resilience, and operational performance.',
                  'name' => 'Steve Joo',
                  'title' => 'IT Cybersecurity Specialist (Network)',
                  'organization' => 'U.S. Department of Justice',
              ],
              [
                  'quote' =>
                      'Tim consistently helped the organization save significant resources and improve operational efficiency. He is a strong leader who ensures his teams have the training, experience, and confidence needed to make sound decisions.',
                  'name' => 'Roderick Adams',
                  'title' => 'Government Lead, Network Services',
                  'organization' => 'Executive Office for Immigration Review, Office of Information Technology',
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
        href="<?= e(SITE_ABOUT_PATH) ?>"
        class="home-navigation-button">
        About
      </a>

      <a
        href="<?= e(SITE_CONTACT_PATH) ?>"
        class="home-navigation-button home-navigation-button-primary">
        Continue the Conversation
      </a>

    </div>

  </section>

<!-- End Home Page Navigation -->

<!-- Contact Section -->

  <div class="home-section-wrapper">

    <section
      id="contact"
      class="home-contact-section"
      aria-labelledby="home-contact-title">

      <div class="contact-class">

        <h2
          id="home-contact-title"
          class="visually-hidden">
          Contact Tim Gabaree
        </h2>

        <div class="qr-code-block">

          <div class="qr-code-stack">

            <a
              href="<?= e(SITE_CONTACT_PATH) ?>"
              aria-label="Open Tim Gabaree’s contact page">

              <?= siteImage('qr_code') ?>

            </a>

            <p class="qr-code-caption">
              <a
                class="qr-code-caption-link"
                href="<?= e(SITE_CONTACT_PATH) ?>">
                Scan or click to connect
              </a>
            </p>

          </div>

        </div>

        <div class="home-contact-block">

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

<?php

require __DIR__ .
    '/includes/components/component-footer.php';

?>
