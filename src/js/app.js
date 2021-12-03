import { navBtn } from "./components/nav";
import Splitting from "splitting";
import { sliderApp } from "./components/slider-app";
import { contactForm } from "./components/contact-form";
import { initRouting } from "./route";
import { loader } from "./components/loader";
import { titlePage } from "./components/title-page";
import { titleDemo } from "./components/title-demo";
import { removeScript } from "./components/remove-script-form";

window.App = {};

export const App = window.App;
App.init = function () {
  Splitting();
  initRouting();
  const wrapLoader = document.querySelector(".loader");
  if (wrapLoader) {
    loader();
  }
  const headerTitlePage = document.querySelector(".header-page");
  if (headerTitlePage) {
    titlePage();
  }
  const contentDemo = document.querySelector(".content-demo");
  if (contentDemo) {
    titleDemo();
  }
  const nav = document.querySelector("#nav");
  if (nav) {
    navBtn(document.querySelector(".btn-nav"));
  }
  const slider = document.querySelector(".slider-device");
  if (slider) {
    sliderApp();
  }
  const homePage = document.querySelector(".page-home");
  if (homePage) {
    removeScript();
  }
  const contact = document.querySelector(".wrap-form-contact");
  if (contact) {
    contactForm();
  }
};

/*--------------------------------------------
    load function
---------------------------------------------*/
window.addEventListener("load", function () {
  App.init();
});
