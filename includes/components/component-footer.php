<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Site Footer
|--------------------------------------------------------------------------
|
| Shared footer navigation, copyright information, JavaScript, and
| document closing elements for all public pages.
|
| Optional variables:
|
| $footerLinks
| $page
|
*/

/*
|--------------------------------------------------------------------------
| Component Requirements
|--------------------------------------------------------------------------
|
| bootstrap.php must already be loaded by the calling page.
|
*/

/*
|--------------------------------------------------------------------------
| Footer Navigation
|--------------------------------------------------------------------------
|
| Individual pages may override $footerLinks before requiring this
| component.
|
*/

if (
    !isset($footerLinks) ||
    !is_array($footerLinks)
) {
    $footerLinks = [
        'Home' =>
            SITE_HOME_PATH,

        'Privacy Policy' =>
            SITE_PRIVACY_PATH,

        'Sitemap' =>
            SITE_SITEMAP_PATH,
    ];
}

/*
|--------------------------------------------------------------------------
| Home Link Suppression
|--------------------------------------------------------------------------
|
| The Home link is unnecessary when the visitor is already on the
| homepage.
|
*/

if (
    isset($page) &&
    $page === 'home'
) {
    unset(
        $footerLinks['Home']
    );
}

?>

<!-- Footer -->

<footer class="footer-disclaimer">

  <?php if ($footerLinks !== []): ?>

  <p>

    <?php

    $footerItems = [];

    foreach (
        $footerLinks as $label => $url
    ) {
        $footerItems[] =
            sprintf(
                '<a href="%s">%s</a>',
                e($url),
                e($label)
            );
    }

    echo implode(
        ' &nbsp;|&nbsp; ',
        $footerItems
    );

    ?>

  </p>

  <?php endif; ?>

  <p class="footer-disclaimer">
    <?= copyrightNotice() ?>
  </p>

</footer>

<!-- End Footer -->

<?php

$pageScripts =
    array_values(
        array_filter(
            $pageScripts,
            static function (
                mixed $pageScript
            ): bool {
                return is_string($pageScript) &&
                    trim($pageScript) !== '';
            }
        )
    );

?>

<!-- JavaScript -->

<script
  src="<?= e(
      asset(
          '/js/main.js',
          VERSION_JS
      )
  ) ?>"
  defer
></script>

<?php foreach ($pageScripts as $pageScript): ?>

<script
  src="<?= e(
      asset(
          trim($pageScript),
          VERSION_JS
      )
  ) ?>"
  defer
></script>

<?php endforeach; ?>

<!-- End JavaScript -->

</body>

<!-- End Page Body -->

</html>
