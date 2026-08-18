<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Primary Navigation
|--------------------------------------------------------------------------
|
| Shared navigation for all public pages.
|
| Tim Gabaree's navigation includes:
|
| - homepage section links;
| - Operating Leadership dropdown;
| - About dropdown;
| - Contact / Connect;
| - external social-profile links.
|
| The CSS classes and element IDs in this component are also used by
| main.js for responsive navigation and dropdown behavior.
|
*/

$currentPage =
    isset($page) &&
    is_string($page)
        ? $page
        : '';

$isHomePage =
    $currentPage === 'home';

$homePrefix =
    $isHomePage
        ? ''
        : '/';

?>

<!-- Navbar -->

<nav
  class="navbar"
  aria-label="Primary navigation">

<!-- Mobile Navigation Toggle -->

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

<!-- Site Brand -->

  <a
    class="navbar-brand"
    href="<?= e(
        $isHomePage
            ? '#home'
            : '/#home'
    ) ?>">
    <?= e(SITE_NAME) ?>
  </a>

<!-- Primary Navigation -->

  <div
    class="navbar-collapse"
    id="navbarNav">

    <ul class="navbar-nav">

<!-- Home -->

      <li class="nav-item">

        <a
          class="nav-link"
          href="<?= e(
              $isHomePage
                  ? '#home'
                  : '/#home'
          ) ?>"
          <?php if ($isHomePage): ?>
          aria-current="page"
          <?php endif; ?>>
          Home
        </a>

      </li>

<!-- Operating Leadership -->

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
            href="<?= e(
                $homePrefix .
                '#experience'
            ) ?>">
            Operating Results
          </a>

          <a
            class="dropdown-item"
            href="<?= e(
                $homePrefix .
                '#board'
            ) ?>">
            Board and Advisory
          </a>

          <a
            class="dropdown-item"
            href="<?= e(
                $homePrefix .
                '#results'
            ) ?>">
            Strategic Impact
          </a>

          <a
            class="dropdown-item"
            href="<?= e(
                $homePrefix .
                '#expertise'
            ) ?>">
            Expertise
          </a>

          <a
            class="dropdown-item"
            href="<?= e(
                $homePrefix .
                '#education'
            ) ?>">
            Education
          </a>

        </div>

      </li>

<!-- About -->

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
            href="<?= e(SITE_ABOUT_PATH) ?>"
            <?php if ($currentPage === 'about'): ?>
            aria-current="page"
            <?php endif; ?>>
            About Tim
          </a>

          <a
            class="dropdown-item"
            href="<?= e(
                $homePrefix .
                '#q-and-a'
            ) ?>">
            Leadership Perspective
          </a>

          <a
            class="dropdown-item"
            href="<?= e(
                $homePrefix .
                '#testimonials'
            ) ?>">
            Testimonials
          </a>

        </div>

      </li>

<!-- Contact -->

      <li class="nav-item">

        <a
          class="nav-link"
          href="<?= e(SITE_CONTACT_PATH) ?>"
          <?php if ($currentPage === 'contact'): ?>
          aria-current="page"
          <?php endif; ?>>
          Connect
        </a>

      </li>

    </ul>

  </div>

<!-- Social Profiles -->

  <div
    class="nav-link-container"
    aria-label="Tim Gabaree social profiles">

<!-- Blog -->

    <a
      class="nav-link"
      href="<?= e(SITE_BLOGSPOT) ?>"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Visit Tim Gabaree’s blog — opens in a new tab">

      <?= siteImage(
          'social_blogger',
          [
              'width' =>
                  25,

              'height' =>
                  25,

              'attributes' => [
                  'aria-hidden' =>
                      'true',
              ],
          ]
      ) ?>

    </a>

<!-- LinkedIn -->

    <a
      class="nav-link"
      href="<?= e(SITE_LINKEDIN) ?>"
      target="_blank"
      rel="me noopener noreferrer"
      aria-label="Visit Tim Gabaree’s LinkedIn profile — opens in a new tab">

      <?= siteImage(
          'social_linkedin',
          [
              'width' =>
                  25,

              'height' =>
                  25,

              'attributes' => [
                  'aria-hidden' =>
                      'true',
              ],
          ]
      ) ?>

    </a>

<!-- GitHub -->

    <a
      class="nav-link"
      href="<?= e(SITE_GITHUB) ?>"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Visit Tim Gabaree’s GitHub profile — opens in a new tab">

      <?= siteImage(
          'social_github',
          [
              'width' =>
                  25,

              'height' =>
                  25,

              'attributes' => [
                  'aria-hidden' =>
                      'true',
              ],
          ]
      ) ?>

    </a>

  </div>

</nav>

<!-- End Navbar -->
