document.addEventListener("DOMContentLoaded", (event) => {
  function appearOnScroll() {
    let counter = 0;

    addEventListener("scroll", () => {
      showItems(counter);
    });

    addEventListener("load", () => {
      showItems(counter);
    });
  }

  function showItems(counter) {
    let hiddenItems = document.querySelectorAll('.appear-on-scroll:not(.show)');

    if (!hiddenItems) return;

    hiddenItems.forEach(function (item) {
      if (checkVisible(item)) {
        item.style.transitionDelay = (counter * .1) + .2 + "s";
        item.classList.add('show');
        counter++;

        setTimeout(() => {
          counter--
        }, ((counter * .1) * 1000) + 400);
      }
    })
  }

  function checkVisible(item) {
    let rect = item.getBoundingClientRect();
    let viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
    return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
  }

  appearOnScroll();
});
