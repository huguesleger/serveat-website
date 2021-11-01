import barba from '@barba/core';
import barbaPrefetch from '@barba/prefetch';
import { toSolutionTransition } from './transitions/solution';
// import { defaultTransition } from './transitions/default';
import { toActionTransition } from './transitions/actions';
import { fromSolutionToHomeTransition } from './transitions/back-home';
import { highlightCurrentNavLink } from './components/header-nav';
import { scrollLoc } from './components/scroll';

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
        toActionTransition,
        fromSolutionToHomeTransition,
        // defaultTransition
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
  
  export const initRouting = () => {
    const $html = document.querySelector('html');
    barba.hooks.beforeEnter(({current, next}) => {
        highlightCurrentNavLink(next.container);
    });
    barba.hooks.before(() => {
      $html.classList.add('transition-running');
    });
    barba.hooks.after(() => {
      $html.classList.remove('transition-running');
      scrollLoc();
    });
    barba.use(barbaPrefetch);
    requestAnimationFrame(() => initBarba());
  };