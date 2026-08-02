<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
$page = 'about';
$pageTitle ='About Tim Gabaree | Portfolio CIO | Technology Value Creation';
$metaDescription = 'About Tim Gabaree, Portfolio CIO and technology executive focused on governance, technology value creation, operating model transformation, and enterprise performance.';
$canonicalUrl = SITE_URL . '/about.php';
$aboutImage =SITE_URL . '/media/GabareeFamily1.webp';
$ogType = 'profile';
$ogTitle = 'About Tim Gabaree | Portfolio CIO';
$ogDescription = 'About Tim Gabaree, Portfolio CIO, technology executive, board advisor, veteran, husband, father, and lifelong learner.';
$ogImage = $aboutImage;
$ogImageType = 'image/webp';
$ogImageWidth = 800;
$ogImageHeight = 600;
$ogImageAlt = 'Tim Gabaree with his family';
$twitterCard = 'summary_large_image';
$twitterDescription = 'Technology executive, board advisor, veteran, husband, father, and lifelong learner.';
$preloadImage = '/media/GabareeFamily1.webp';
require __DIR__ . '/includes/schema-about.php';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<!-- Main -->
<main class="about-page"> 
  <!-- About Section -->
  <section class="about-hero">
    <div class="about-card">
      <figure class="about-featured-photo"> <img
  src="/media/GabareeFamily1.webp"
  alt="Tim Gabaree with Carrie, Clint, and Finn in Halloween costumes"
  width="800"
  height="600"
  loading="eager"
  fetchpriority="high"
  decoding="async">
        <figcaption>Every family needs a Batman and a chef. Fortunately, we have both.</figcaption>
      </figure>
      <div class="about-author">
        <h1>About Tim</h1>
        <p> Tim Gabaree is a technology executive, board advisor, veteran, husband, father, and lifelong learner who believes leadership is ultimately about people. Throughout his career, he has helped organizations navigate change, improve performance, strengthen governance, and create lasting value. While technology has often been the vehicle, his focus has always been on helping people and organizations succeed. </p>
        <p> Outside of work, Tim's greatest investment is his family. Alongside his wife Carrie and their sons, Clint and Finn, he enjoys creating experiences that combine learning, curiosity, adventure, and plenty of laughter. Whether exploring museums and historic sites, researching family history, roasting coffee, cooking and baking together, or simply spending time with the people who matter most, he believes many of life's most important lessons happen far away from conference rooms and board meetings. </p>
        <p> Tim is also an avid reader with a lifelong love of science fiction and fantasy. His bookshelves are filled with favorites from Douglas Adams, J.R.R. Tolkien, Jim Butcher, Terry Pratchett, Neil Gaiman, and Peter F. Hamilton. He enjoys stories that blend imagination, humor, adventure, and thoughtful observations about people and the world around us. Long before AI became a boardroom topic, he was the kid taking things apart to see how they worked and imagining what technology might look like in the future. Today, he still enjoys keeping up with artificial intelligence, emerging technologies, and the ideas shaping what’s next. </p>
        <p> A U.S. Army veteran who served with the 3rd U.S. Infantry Regiment, The Old Guard, Tim has long been drawn to history, service, and the stories of those who came before us. Those interests continue to shape how he approaches leadership, family, and community today. </p>
      </div>
    </div>
  </section>
  <!-- End About Section -->
  <section class="about-gallery about-gallery-featured">
    <figure class="gallery-large"> <img
      src="/media/LadyLibertyFinnClintCarrieTim.webp"
      alt="Tim Gabaree with Carrie, Clint, and Finn at the Statue of Liberty"
      width="800"
      height="1067"
      loading="lazy"
      decoding="async">
      <figcaption> Lady Liberty, Finn, Clint, Carrie, and me. Wow! </figcaption>
    </figure>
    <figure> <img
      src="/media/FinnClintWorkingHardMessage.webp"
      alt="Clint and Finn viewing an exhibit about hard work at Ellis Island"
      width="800"
      height="486"
      loading="lazy"
      decoding="async">
      <figcaption> At Ellis Island. Sometimes I wonder if we’ve lost touch with some of these lessons along the way. </figcaption>
    </figure>
    <figure> <img
      src="/media/FamilyMtVernon.webp"
      alt="Tim Gabaree with Carrie, Clint, and Finn at Mount Vernon"
      width="800"
      height="600"
      loading="lazy"
      decoding="async">
      <figcaption> Fun at George and Martha Washington's house. </figcaption>
    </figure>
  </section>
  <!-- Return to Main Page Section -->
  <div class="about-return"> <a class="button" href="/"> Return to Main Page </a> </div>
  <!-- End Return to Main Page Section --> 
  <!-- Contact Section -->
  <section class="about-contact">
    <div class="contact-class">
      <h2>Let's Connect</h2>
      <div class="qr-code-block"> <a
    href="/hello.php"
    aria-label="Open Tim Gabaree’s contact page"> <img
      src="/media/timgabaree-qr-code.webp"
      alt="QR code to Tim Gabaree’s contact page"
      width="180"
      height="180"
      loading="lazy"> </a> </div>
      <div class="contact-content"> <span>
        <?= e(SITE_NAME) ?>
        </span> <span> <a
      href="tel:<?= e(phoneHref(SITE_PHONE)) ?>"
      class="contactLink">
        <?= e(phoneDisplay(SITE_PHONE)) ?>
        </a> </span> <span> <a
      href="mailto:<?= e(SITE_EMAIL) ?>"
      class="contactLink">
        <?= e(SITE_EMAIL) ?>
        </a> </span> </div>
    </div>
  </section>
  <!-- End Contact Section --> 
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>