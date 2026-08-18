document.addEventListener(
  "DOMContentLoaded",
  function () {
    const carousel =
      document.querySelector(
        "#results-carousel"
      );

    const toggleButton =
      document.querySelector(
        "#results-animation-toggle"
      );

    if (
      !carousel ||
      !toggleButton
    ) {
      return;
    }

    toggleButton.addEventListener(
      "click",
      function () {
        const isPaused =
          carousel.classList.toggle(
            "is-paused"
          );

        toggleButton.setAttribute(
          "aria-pressed",
          String(isPaused)
        );

        toggleButton.textContent =
          isPaused
            ? "Resume animation"
            : "Pause animation";
      }
    );
  }
);
