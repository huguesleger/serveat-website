import {navBtn} from './components/nav';
import { scrollLoc } from './components/scroll';
import Splitting from 'splitting';
import {sliderApp} from './components/slider-app';
import { scrollToTop } from './components/scroll-top';
import { contactForm } from './components/contact-form';
import { demoForm } from './components/demo-form';
import { ctaDemo } from './components/cta-demo';
import {initRouting} from './route';

window.App = {};


export const App = window.App;
App.init = function() {
    initRouting();
    scrollLoc();
    Splitting();
    navBtn(document.querySelector('.btn-nav'));
    sliderApp();
    scrollToTop();
    const contact = document.querySelector('.wrap-form-contact');
    if(contact) {
        contactForm();
    }
    const demo = document.querySelector('.wrap-form-demo');
    if (demo) {
        demoForm();
        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(";");
            for (let i = 0; i < ca.length; i++) {
              const c = ca[i];
              while (c.charAt(0) == " ") c = c.substring(1, c.length);
              if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
          }
          const inputEmail = document.querySelector('#wpforms-35-field_6');
          inputEmail.value = (getCookie('emailInput'));
          if(inputEmail.value.length > 0) {
              document.querySelector('#wpforms-35-field_6-container label').classList.add('active');
          }
    }

    const ctaSolution = document.querySelector('.cta-demande-demo');
    if(ctaSolution) {
        ctaDemo();
    }
}







/*--------------------------------------------
    load function
---------------------------------------------*/    
window.addEventListener('load', function() {
    App.init();
});