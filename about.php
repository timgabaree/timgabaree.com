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
    'about';

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
  class="about-page">

  <?= siteImage(
      'background',
      [
          'class' => 'page-background-image',
      ]
  ) ?>

<!-- About Section -->

  <section
    class="about-hero"
    aria-labelledby="about-title">

    <div class="about-card">

      <figure class="about-featured-photo">

        <?= siteImage($pageImageKey) ?>

        <figcaption>
          Every family needs a Batman and a chef. Fortunately, we have both.
        </figcaption>

      </figure>

      <div class="about-author">

        <h1 id="about-title">
          About
        </h1>

        <p>
          Tim Gabaree is a technology executive, board advisor, veteran,
          husband, father, and lifelong learner who believes leadership is
          ultimately about people. Throughout his career, he has helped
          organizations navigate change, improve performance, strengthen
          governance, and create lasting value. While technology has often
          been the vehicle, his focus has always been on helping people and
          organizations succeed.
        </p>

        <p>
          Outside of work, Tim's greatest investment is his family. Alongside
          his wife Carrie and their sons, Clint and Finn, he enjoys creating
          experiences that combine learning, curiosity, adventure, and plenty
          of laughter. Whether exploring museums and historic sites,
          researching family history, roasting coffee, cooking and baking
          together, or simply spending time with the people who matter most,
          he believes many of life's most important lessons happen far away
          from conference rooms and board meetings.
        </p>

        <p>
          Tim is also an avid reader with a lifelong love of science fiction
          and fantasy. His bookshelves are filled with favorites from Douglas
          Adams, J.R.R. Tolkien, Jim Butcher, Terry Pratchett, Neil Gaiman,
          and Peter F. Hamilton. He enjoys stories that blend imagination,
          humor, adventure, and thoughtful observations about people and the
          world around us. Long before AI became a boardroom topic, he was the
          kid taking things apart to see how they worked and imagining what
          technology might look like in the future. Today, he still enjoys
          keeping up with artificial intelligence, emerging technologies,
          and the ideas shaping what’s next.
        </p>

        <p>
          A U.S. Army veteran who served with the 3rd U.S. Infantry Regiment,
          The Old Guard, Tim has long been drawn to history, service, and the
          stories of those who came before us. Those interests continue to
          shape how he approaches leadership, family, and community today.
        </p>

      </div>

    </div>

  </section>

<!-- End About Section -->

<!-- Family Gallery Section -->

  <section
    class="about-gallery-section"
    aria-labelledby="about-gallery-title">

    <div class="about-section-heading-block">

      <h2
        id="about-gallery-title"
        class="about-section-heading">
        Family Experiences
      </h2>

    </div>

    <div class="about-gallery about-gallery-featured">

      <figure class="about-gallery-large">

        <?= siteImage('about_liberty_family') ?>

        <figcaption>
          Lady Liberty, Finn, Clint, Carrie, and me. Wow!
        </figcaption>

      </figure>

      <figure>

        <?= siteImage('about_ellis_island') ?>

        <figcaption>
          At Ellis Island. Sometimes I wonder if we’ve lost touch with some
          of these lessons along the way.
        </figcaption>

      </figure>

      <figure>

        <?= siteImage('about_mount_vernon') ?>

        <figcaption>
          Fun at George and Martha Washington's house.
        </figcaption>

      </figure>

    </div>

  </section>

<!-- End Family Gallery Section -->

<!-- Personal Interests Section -->

  <section
    id="interests-and-hobbies"
    class="about-interests-section"
    aria-labelledby="about-interests-title">

    <div class="about-interests-heading-block">

      <h2
        id="about-interests-title"
        class="about-interests-heading">
        Personal Interests
      </h2>

    </div>

    <div class="about-interests-content">

      <article class="about-interests-block">

        <?= siteImage(
            'interest_coffee',
            [
                'class' => 'about-interests-block-image',
            ]
        ) ?>

        <h3 class="about-interest-caption">
          Coffee Roasting
        </h3>

      </article>

      <article class="about-interests-block">

        <?= siteImage(
            'interest_chocolate',
            [
                'class' => 'about-interests-block-image',
            ]
        ) ?>

        <h3 class="about-interest-caption">
          Baking and Chocolatiering
        </h3>

      </article>

      <article class="about-interests-block">

        <?= siteImage(
            'interest_pizza',
            [
                'class' => 'about-interests-block-image',
            ]
        ) ?>

        <h3 class="about-interest-caption">
          Pizza Making
        </h3>

      </article>

      <article class="about-interests-block">

        <?= siteImage(
            'interest_technology',
            [
                'class' => 'about-interests-block-image',
            ]
        ) ?>

        <h3 class="about-interest-caption">
          AI &amp; Emerging Technology
        </h3>

      </article>

    </div>

  </section>

<!-- End Personal Interests Section -->

<!-- Contact Section -->

  <section
    class="about-contact"
    aria-labelledby="about-contact-title">

    <div class="contact-class">

      <h2 id="about-contact-title">
        Let’s Connect
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

  </section>

<!-- End Contact Section -->

</main>

<?php

require __DIR__ . '/includes/components/component-footer.php';

?>
