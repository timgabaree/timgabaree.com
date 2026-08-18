(function () {
  const currentUrl =
    new URL(
      window.location.href
    );

  window.dataLayer =
    window.dataLayer || [];

  window.dataLayer.push({
    event:
      "contact_form_submission",

    form_name:
      "Continue the Conversation",

    form_location:
      "/contact"
  });

  currentUrl.searchParams.delete(
    "submitted"
  );

  const cleanUrl =
    currentUrl.pathname +
    currentUrl.search +
    currentUrl.hash;

  window.history.replaceState(
    {},
    document.title,
    cleanUrl
  );
})();
