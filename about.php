<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Page Configuration
|--------------------------------------------------------------------------
*/

$page = 'about';

$pageTitle =
    'About Tim Gabaree | Portfolio CIO | Technology Value Creation';

$metaDescription =
    'About Tim Gabaree, Portfolio CIO and technology executive focused on governance, technology value creation, operating model transformation, and enterprise performance.';

$canonicalUrl =
    SITE_ABOUT_URL;

/*
|--------------------------------------------------------------------------
| Page Images
|--------------------------------------------------------------------------
*/

$aboutImage =
    SITE_ABOUT_IMAGE;

/*
|--------------------------------------------------------------------------
| Open Graph
|--------------------------------------------------------------------------
*/

$ogType = 'profile';

$ogTitle =
    'About Tim Gabaree | Portfolio CIO';

$ogDescription =
    'About Tim Gabaree, Portfolio CIO, technology executive, board advisor, veteran, husband, father, and lifelong learner.';

$ogImage =
    $aboutImage;

$ogImageType =
    'image/webp';

$ogImageWidth =
    SITE_ABOUT_IMAGE_WIDTH;

$ogImageHeight =
    SITE_ABOUT_IMAGE_HEIGHT;

$ogImageAlt =
    'Tim Gabaree with his family';

/*
|--------------------------------------------------------------------------
| X / Twitter
|--------------------------------------------------------------------------
*/

$twitterCard =
    'summary_large_image';

$twitterDescription =
    'Technology executive, board advisor, veteran, husband, father, and lifelong learner.';

$twitterImage =
    SITE_ABOUT_IMAGE;

$twitterImageAlt =
    $ogImageAlt;

/*
|--------------------------------------------------------------------------
| Performance
|--------------------------------------------------------------------------
*/

$preloadImage =
    SITE_ABOUT_IMAGE_PATH;

/*
|--------------------------------------------------------------------------
| Page Includes
|--------------------------------------------------------------------------
*/

require __DIR__ . '/includes/schema/schema-about.php';
require __DIR__ . '/includes/components/component-head.php';
require __DIR__ . '/includes/components/component-header.php';

?>

<main
  id="main-content"
  class="about-page">

  <!-- About Section -->
  <section
    class="about-hero"
    aria-labelledby="about-title">

    <div class="about-card">

      <figure class="about-featured-photo">

        <img
          src="<?= e(SITE_ABOUT_IMAGE_PATH) ?>"
          alt="Tim Gabaree with Carrie, Clint, and Finn in Halloween costumes"
          width="<?= e((string) SITE_ABOUT_IMAGE_WIDTH) ?>"
          height="<?= e((string) SITE_ABOUT_IMAGE_HEIGHT) ?>"
          loading="eager"
          fetchpriority="high"
          decoding="async">

        <figcaption>
          Every family needs a Batman and a chef. Fortunately, we have both.
        </figcaption>

      </figure>

      <div class="about-author">

        <h1 id="about-title">
          About Tim
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

    <figure class="gallery-large">

      <img
        src="/media/about-lady-liberty-finn-clint-carrie-tim-800x1067.webp"
        alt="Tim Gabaree with Carrie, Clint, and Finn at the Statue of Liberty"
        width="800"
        height="1067"
        loading="lazy"
        decoding="async">

      <figcaption>
        Lady Liberty, Finn, Clint, Carrie, and me. Wow!
      </figcaption>

    </figure>

    <figure>

      <img
        src="/media/about-finn-clint-working-hard-message-800x486.webp"
        alt="Clint and Finn viewing an exhibit about hard work at Ellis Island"
        width="800"
        height="486"
        loading="lazy"
        decoding="async">

      <figcaption>
        At Ellis Island. Sometimes I wonder if we’ve lost touch with some of
        these lessons along the way.
      </figcaption>

    </figure>

    <figure>

      <img
        src="/media/about-gabaree-family-mt-vernon-800x600.webp"
        alt="Tim Gabaree with Carrie, Clint, and Finn at Mount Vernon"
        width="800"
        height="600"
        loading="lazy"
        decoding="async">

      <figcaption>
        Fun at George and Martha Washington's house.
      </figcaption>

    </figure>

  </div>

</section>
<!-- End Family Gallery Section -->

<!-- Personal Interests -->
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

  <div class="interests-content">

    <article class="interests-block coffee-roasting">

      <h3 class="interest-caption">
        Coffee Roasting
      </h3>

    </article>

    <article class="interests-block chocolatiering">

      <h3 class="interest-caption">
        Baking and Chocolatiering
      </h3>

    </article>

    <article class="interests-block pizza-making">

      <h3 class="interest-caption">
        Pizza Making
      </h3>

    </article>

    <article class="interests-block geeking-out">

      <h3 class="interest-caption">
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

        <a
          href="<?= e(SITE_CONTACT_PATH) ?>"
          aria-label="Open Tim Gabaree’s contact page">

          <img
            src="<?= e(SITE_QR_CODE_PATH) ?>"
            alt="QR code to Tim Gabaree’s contact page"
            width="<?= e((string) SITE_QR_CODE_WIDTH) ?>"
            height="<?= e((string) SITE_QR_CODE_HEIGHT) ?>"
            loading="lazy"
            decoding="async">

        </a>

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

  <!-- Return to Main Page -->
  <div class="about-return">

    <a
      class="primary-cta-button"
      href="/">
      Return to Main Page
    </a>

  </div>
  <!-- End Return to Main Page -->
	
</main>

<?php

require __DIR__ . '/includes/components/component-footer.php';

?>
