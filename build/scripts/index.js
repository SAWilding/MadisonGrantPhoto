import { loadHeaderFooter } from "./utils.js";

loadHeaderFooter();

let menuIsOpen = false;

function toggleNav() {
  let burgerMenu = document.querySelector(".burger-menu");
  let navMenu = document.querySelector(".nav-menu");
  console.log(burgerMenu);
  burgerMenu.addEventListener("click", () => {
    if (menuIsOpen) {
      navMenu.style.right = "-100%";
    } else {
      navMenu.style.right = "0";
    }
    menuIsOpen = !menuIsOpen;
  });
  window.addEventListener("resize", () => {
    var viewportWidth =
      window.innerWidth || document.documentElement.clientWidth;

    if (viewportWidth >= 800) {
      navMenu.style.right = "0";
      menuIsOpen = true;
    } else {
      navMenu.style.right = "-100%";

      menuIsOpen = false;
    }
  });
}

window.onload = () => {
  setTimeout(toggleNav, 100);
};
