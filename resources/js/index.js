import "../scss/index.scss";
import "plyr/dist/plyr.css";

import Plyr from "plyr";
// import Navigation from "a11y-menu";

const plyPlayer = new Plyr(document.querySelector(".plyr-player"), {
  settings: [],
});

const toggleNavButton = document.getElementById("js-toggle-mobile-nav");
toggleNavButton.addEventListener("click", () => {
  document.body.classList.toggle("mobile-menu--is-open");
});

let subnavButtons = document.querySelectorAll("button[aria-haspopup]");
subnavButtons.forEach((b) => {
  b.addEventListener("click", (e) => {
    const target = e.currentTarget;
    const expanded = target.getAttribute("aria-expanded");
    if (expanded === "false") {
      subnavButtons.forEach((b) => b.setAttribute("aria-expanded", false));
      target.setAttribute("aria-expanded", true);
    } else {
      target.setAttribute("aria-expanded", false);
    }
  });
});

const artists = document.querySelectorAll(".artists-list__item");
artists.forEach((artist) => {
  let toggleDescButtons = artist.querySelectorAll(".js__toggle-description");
  let isExpanded = false;

  toggleDescButtons.forEach((button) => {
    button.setAttribute("aria-expanded", isExpanded);
    button.addEventListener("click", () => {
      if (isExpanded) {
        isExpanded = false;
      } else {
        isExpanded = true;
      }
      toggleDescButtons.forEach((element) => {
        element.setAttribute("aria-expanded", isExpanded);
      });
      button.setAttribute("aria-expanded", isExpanded);
    });
  });
});
