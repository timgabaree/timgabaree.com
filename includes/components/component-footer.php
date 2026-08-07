<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/bootstrap.php';

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
<script
  src="<?= e(asset('/js/main.js', JS_VERSION)) ?>"
  defer
></script>
<!-- End JavaScript -->

</body>
<!-- End Page Body -->

</html>