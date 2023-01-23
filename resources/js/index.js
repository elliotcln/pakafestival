import "../scss/index.scss";
import "plyr/dist/plyr.css";

import Plyr from "plyr";
const plyPlayer = new Plyr(document.querySelector(".plyr-player"), {
  settings: [],
});

const toggleNavButton = document.getElementById("js-toggle-mobile-nav");
toggleNavButton.addEventListener("click", () => {
  const nav = document.querySelector(".site-header__mobile-nav");
  document.body.classList.toggle("mobile-menu--is-open");
  nav.classList.toggle("is-open");
});
