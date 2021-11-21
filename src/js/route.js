import barba from '@barba/core';
import barbaPrefetch from '@barba/prefetch';
import { toSolutionTransition } from './transitions/solution';
import { fromSolutionToHomeTransition } from './transitions/solution-to-home';
import { highlightCurrentNavLink } from './components/header-nav';
import { toContactTransition } from './transitions/contact';
import { fromContactToHomeTransition } from './transitions/contact-to-home';
import { toDemoTransition } from './transitions/demo';
import { fromDemoToHomeTransition } from './transitions/demo-to-home';
import { toThanksTransition } from './transitions/thanks';
import { fromThanksToHomeTransition } from './transitions/thanks-to-home';
import LocomotiveScroll from 'locomotive-scroll';
import { ctaDemo } from './components/cta-demo';
import { demoForm } from './components/demo-form';
import { hero } from './components/hero';
import Splitting from 'splitting';
import { sliderApp } from './components/slider-app';

export const prefetchPage = (href) => barba.prefetch(href);
export const getCurrentUrl = () => barba.url.getHref();
export const parseQuery = (url) => barba.url.parse(url).query;

export const goToPage = (href) => {
    if (barba.transitions.isRunning) {
      return null;
    } else {
      return barba.go(href);
    }
  };

  const initBarba = () => barba.init({
    debug: true,
    preventRunning: true,
    timeout: 30000,
    cacheIgnore: false,
    transitions: [
        toSolutionTransition,
        toContactTransition,
        fromSolutionToHomeTransition,
        fromContactToHomeTransition,
        toDemoTransition,
        fromDemoToHomeTransition,
        toThanksTransition,
        fromThanksToHomeTransition,
    ],
    prevent: ({el, event}) => {
      if (event.type === 'click') {
        if (el.href === window.location.href) {
          event.preventDefault();
          event.stopPropagation();
          return true;
        }
      }
    },
  }); 

  let scrollContainer = new LocomotiveScroll({
      el: document.querySelector('[data-scroll-container]'),
      smooth: true,
  });
  scrollContainer.on('scroll', (position) => {
      const body = document.querySelector('body');
      if((position.scroll.y) > 5) {
          body.classList.add('on-scroll');
      } else {
          body.classList.remove('on-scroll');
      }
      if((position.scroll.y) > 0) {
          body.classList.add('on-scroll');
      }
  });
  
  export const initRouting = () => {
    const $html = document.querySelector('html');
    barba.hooks.beforeEnter(({current, next}) => {
        highlightCurrentNavLink(next.container); 
        const wpForms = document.querySelector('.wpforms-form');
        if(wpForms) {
          const baseURL = window.location.host;
          const protocol = window.location.protocol;
          const script = document.querySelector('#wpforms-js');
          script.remove();
          const newScript = protocol + "//" + baseURL + '/wp-content/plugins/wpforms-lite/assets/js/wpforms.js';
          const scriptEl = document.createElement('script')
          scriptEl.setAttribute('id', 'wpforms-js');
          scriptEl.src = newScript;
          document.querySelector('body').appendChild(scriptEl); 

          // barba.prefetch( protocol + "//" + baseURL + '/merci/');
        }
    });
    barba.hooks.before(() => {
      $html.classList.add('transition-running');
    });
    barba.hooks.enter(() => {
      scrollContainer.init();
      scrollContainer.on('scroll', (position) => {
        const body = document.querySelector('body');
        if((position.scroll.y) > 5) {
            body.classList.add('on-scroll');
        } else {
            body.classList.remove('on-scroll');
        }
        if((position.scroll.y) > 0) {
            body.classList.add('on-scroll');
        }
    });
    const navMobile = document.querySelector('.nav-mobile');
    navMobile.classList.remove('is-open');
    const btnMobile = document.querySelector('.btn-nav');
    btnMobile.classList.remove('is-open');
    const heroHome = document.querySelector('.hero-home');
    if(heroHome) {
      Splitting();
      hero();
    }
    const slider = document.querySelector('.slider-device');
    if (slider) {
      sliderApp()
    }
    }),
    barba.hooks.after(() => {
      $html.classList.remove('transition-running');
      scrollContainer.update();
      const ctaSolution = document.querySelector('.cta-demande-demo');
      if(ctaSolution) {
          ctaDemo();
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
            const inputEmail = document.querySelector('.wrap-form-demo .wrap-email input');
            inputEmail.value = (getCookie('emailInput'));
            if(inputEmail.value.length > 0) {
                document.querySelector('.wrap-form-demo .wrap-email label').classList.add('active');
            }
      }
    });
    barba.hooks.afterLeave((data) => {
        let regexp = /\<body.*\sclass=["'](.+?)["'].*\>/gi,
        match = regexp.exec(data.next.html);
      if (!match || !match[1]) {
        // If no body class, remove it
        document.body.setAttribute("class", "");
      } else {
        // Set the new body class
        document.body.setAttribute("class", match[1]);
      }
      scrollContainer.destroy();
    })
    barba.use(barbaPrefetch);
    requestAnimationFrame(() => initBarba());
  };