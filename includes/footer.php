<?php

require_once __DIR__ . '/bootstrap.php';

if (!isset($footerLinks) || !is_array($footerLinks)) {
    $footerLinks = [
        'Home'           => '/',
        'Privacy Policy' => '/privacy.php',
        'Sitemap'        => '/sitemap.xml',
    ];
}

if (isset($page) && $page === 'home') {
    unset($footerLinks['Home']);
}
?>

<!-- Footer -->
<footer class="footer-disclaimer">

  <?php if ($footerLinks !== []): ?>

  <p>

    <?php
    $footerItems = [];

    foreach ($footerLinks as $label => $url) {
        $footerItems[] = sprintf(
            '<a href="%s">%s</a>',
            e($url),
            e($label)
        );
    }

    echo implode(' &nbsp;|&nbsp; ', $footerItems);
    ?>

  </p>

  <?php endif; ?>

  <p class="footer-disclaimer">
    <?= copyrightNotice() ?>
  </p>

</footer>
<!-- End Footer -->

<!-- JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const toggler = document.querySelector(".navbar-toggler");
  const nav = document.querySelector("#navbarNav");
  const dropdownButtons = document.querySelectorAll(".dropdown-toggle");

  if (!toggler || !nav) {
    return;
  }

  toggler.addEventListener("click", function () {
    const expanded =
      toggler.getAttribute("aria-expanded") === "true";

    toggler.setAttribute(
      "aria-expanded",
      String(!expanded)
    );

    nav.classList.toggle("show");
  });

  dropdownButtons.forEach(function (button) {
    button.addEventListener("click", function (event) {
      event.preventDefault();
      event.stopPropagation();

      const expanded =
        button.getAttribute("aria-expanded") === "true";

      dropdownButtons.forEach(function (otherButton) {
        if (otherButton !== button) {
          otherButton.setAttribute(
            "aria-expanded",
            "false"
          );

          otherButton.nextElementSibling.classList.remove("show");
        }
      });

      button.setAttribute(
        "aria-expanded",
        String(!expanded)
      );

      button.nextElementSibling.classList.toggle("show");
    });
  });

  document.querySelectorAll(".navbar a").forEach(function (link) {
    link.addEventListener("click", function () {
      nav.classList.remove("show");

      toggler.setAttribute(
        "aria-expanded",
        "false"
      );

      dropdownButtons.forEach(function (button) {
        button.setAttribute(
          "aria-expanded",
          "false"
        );

        button.nextElementSibling.classList.remove("show");
      });
    });
  });

  document.addEventListener("click", function (event) {
    if (!event.target.closest(".dropdown")) {
      dropdownButtons.forEach(function (button) {
        button.setAttribute(
          "aria-expanded",
          "false"
        );

        button.nextElementSibling.classList.remove("show");
      });
    }
  });
});
</script>
<!-- End JavaScript -->

</body>
<!-- End Page Body -->

</html>