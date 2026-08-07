<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Analytics: Document Head
|--------------------------------------------------------------------------
|
| Loads Google Tag Manager or Google Analytics when a valid measurement
| identifier is configured in config.php.
|
| Leave the corresponding configuration value empty to disable it.
|
*/

/*
|--------------------------------------------------------------------------
| Google Tag Manager
|--------------------------------------------------------------------------
*/

if (
    defined('GOOGLE_TAG_MANAGER_ID') &&
    GOOGLE_TAG_MANAGER_ID !== ''
):
?>

<!-- Google Tag Manager -->
<script>
(function (window, document, script, dataLayerName, containerId) {
  window[dataLayerName] =
    window[dataLayerName] || [];

  window[dataLayerName].push({
    "gtm.start":
      new Date().getTime(),

    event:
      "gtm.js"
  });

  const firstScript =
    document.getElementsByTagName(script)[0];

  const tagManagerScript =
    document.createElement(script);

  const dataLayerQuery =
    dataLayerName !== "dataLayer"
      ? "&l=" + encodeURIComponent(dataLayerName)
      : "";

  tagManagerScript.async =
    true;

  tagManagerScript.src =
    "https://www.googletagmanager.com/gtm.js?id=" +
    encodeURIComponent(containerId) +
    dataLayerQuery;

  firstScript.parentNode.insertBefore(
    tagManagerScript,
    firstScript
  );
})(
  window,
  document,
  "script",
  "dataLayer",
  <?= json_encode(
      GOOGLE_TAG_MANAGER_ID,
      JSON_UNESCAPED_SLASHES |
      JSON_UNESCAPED_UNICODE |
      JSON_HEX_TAG |
      JSON_HEX_AMP |
      JSON_HEX_APOS |
      JSON_HEX_QUOT
  ) ?>
);
</script>
<!-- End Google Tag Manager -->

<?php
endif;

/*
|--------------------------------------------------------------------------
| Google Analytics
|--------------------------------------------------------------------------
|
| Load Google Analytics directly only when Google Tag Manager is not being
| used. This prevents accidental duplicate page-view tracking.
|
*/

if (
    defined('GOOGLE_ANALYTICS_ID') &&
    GOOGLE_ANALYTICS_ID !== '' &&
    (
        !defined('GOOGLE_TAG_MANAGER_ID') ||
        GOOGLE_TAG_MANAGER_ID === ''
    )
):
?>

<!-- Google tag -->
<script
  async
  src="https://www.googletagmanager.com/gtag/js?id=<?= e(
      GOOGLE_ANALYTICS_ID
  ) ?>"></script>

<script>
window.dataLayer =
  window.dataLayer || [];

function gtag() {
  window.dataLayer.push(arguments);
}

gtag(
  "js",
  new Date()
);

gtag(
  "config",
  <?= json_encode(
      GOOGLE_ANALYTICS_ID,
      JSON_UNESCAPED_SLASHES |
      JSON_UNESCAPED_UNICODE |
      JSON_HEX_TAG |
      JSON_HEX_AMP |
      JSON_HEX_APOS |
      JSON_HEX_QUOT
  ) ?>
);
</script>
<!-- End Google tag -->

<?php
endif;