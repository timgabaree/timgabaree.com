<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/bootstrap.php';

$currentPage = isset($page) && is_string($page)
    ? $page
    : '';

$isHomePage = $currentPage === 'home';

$homePrefix = $isHomePage
    ? ''
    : '/';

?>

<!-- Navbar -->
<nav
  class="navbar"
  aria-label="Primary navigation">

  <button
    class="navbar-toggler"
    type="button"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Open navigation menu">

    <span
      class="navbar-toggler-icon"
      aria-hidden="true">
    </span>

  </button>

  <a
    class="navbar-brand"
    href="<?= e($isHomePage ? '#home' : '/#home') ?>">
    <?= e(SITE_NAME) ?>
  </a>

  <div
    class="navbar-collapse"
    id="navbarNav">

    <ul class="navbar-nav">

      <li class="nav-item">

        <a
          class="nav-link"
          href="<?= e($isHomePage ? '#home' : '/#home') ?>"
          <?php if ($isHomePage): ?>
          aria-current="page"
          <?php endif; ?>>
          Home
        </a>

      </li>

      <li class="nav-item dropdown">

        <button
          class="nav-link dropdown-toggle"
          type="button"
          aria-expanded="false"
          aria-controls="operating-leadership-menu"
          aria-haspopup="true">
          Operating Leadership
        </button>

        <div
          class="dropdown-menu"
          id="operating-leadership-menu">

          <a
            class="dropdown-item"
            href="<?= e($homePrefix . '#experience') ?>">
            Operating Results
          </a>

          <a
            class="dropdown-item"
            href="<?= e($homePrefix . '#board') ?>">
            Board and Advisory
          </a>

          <a
            class="dropdown-item"
            href="<?= e($homePrefix . '#results') ?>">
            Strategic Impact
          </a>

          <a
            class="dropdown-item"
            href="<?= e($homePrefix . '#expertise') ?>">
            Expertise
          </a>

          <a
            class="dropdown-item"
            href="<?= e($homePrefix . '#education') ?>">
            Education
          </a>

        </div>

      </li>

      <li class="nav-item dropdown">

        <button
          class="nav-link dropdown-toggle"
          type="button"
          aria-expanded="false"
          aria-controls="about-menu"
          aria-haspopup="true">
          About
        </button>

        <div
          class="dropdown-menu"
          id="about-menu">

          <a
            class="dropdown-item"
            href="/about.php"
            <?php if ($currentPage === 'about'): ?>
            aria-current="page"
            <?php endif; ?>>
            About Tim
          </a>

          <a
            class="dropdown-item"
            href="<?= e($homePrefix . '#q-and-a') ?>">
            Leadership Perspective
          </a>

          <a
            class="dropdown-item"
            href="<?= e($homePrefix . '#testimonials') ?>">
            Testimonials
          </a>

         </div>

      </li>

      <li class="nav-item">

        <a
          class="nav-link"
          href="/contact.php"
          <?php if ($currentPage === 'contact'): ?>
          aria-current="page"
          <?php endif; ?>>
          Connect
        </a>

      </li>

    </ul>

  </div>

  <div
    class="nav-link-container"
    aria-label="Tim Gabaree social profiles">

    <a
      class="nav-link"
      href="<?= e(SITE_BLOGSPOT) ?>"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Visit Tim Gabaree’s blog — opens in a new tab">

      <img
        src="/media/social-media-blogger-icon-50x50.webp"
        width="25"
        height="25"
        alt=""
        aria-hidden="true">

    </a>

    <a
      class="nav-link"
      href="<?= e(SITE_LINKEDIN) ?>"
      target="_blank"
      rel="me noopener noreferrer"
      aria-label="Visit Tim Gabaree’s LinkedIn profile — opens in a new tab">

      <img
        src="/media/social-media-linkedin-icon-50x50.webp"
        width="25"
        height="25"
        alt=""
        aria-hidden="true">

    </a>

    <a
      class="nav-link"
      href="<?= e(SITE_GITHUB) ?>"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Visit Tim Gabaree’s GitHub profile — opens in a new tab">

      <img
        src="/media/social-media-github-icon-50x50.webp"
        width="25"
        height="25"
        alt=""
        aria-hidden="true">

    </a>

  </div>

</nav>
<!-- End Navbar -->