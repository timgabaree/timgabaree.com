<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Analytics: Immediately After <body>
|--------------------------------------------------------------------------
|
| Google Tag Manager requires a noscript fallback immediately after the
| opening body tag.
|
*/

if (
    GOOGLE_TAG_MANAGER_ID === ''
) {
    return;
}

?>

<!-- Google Tag Manager (noscript) -->
<noscript>

<iframe
  src="https://www.googletagmanager.com/ns.html?id=<?= e(
      GOOGLE_TAG_MANAGER_ID
  ) ?>"
  height="0"
  width="0"
  style="
    display:none;
    visibility:hidden;
  ">
</iframe>

</noscript>
<!-- End Google Tag Manager (noscript) -->