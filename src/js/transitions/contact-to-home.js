import { gsap } from "gsap";
import { sliderApp } from "../components/slider-app";

export const fromContactToHomeTransition = {
    name: 'from-contact-to-home-transition',
    to: {
      namespace: ['accueil']
    },
    from: {
      namespace: ['contact']
    },
    leave({next}) {
        const pageTransition = document.querySelector('.page-transition-backdrop');
      return gsap.to(pageTransition, {
        duration: 0.8,
        ease: 'Power4.easeInOut',
        visibility: 'visible',
        scaleY: 1,
        transformOrigin: 'center bottom',
        clipPath: "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)"
      })
      
    },
    afterLeave({next, current}) {
      const scrollBar = document.querySelector('.c-scrollbar');
      scrollBar.remove();
      return (current.container).remove();
    },
    enter() {
      const $backdrop = document.querySelector('.page-transition-backdrop');
      return gsap.to($backdrop, {
        duration: 0.8,
        ease: 'Power4.easeInOut',
        scaleY: 0,
        transformOrigin: 'center top',
        clipPath: "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
        onComplete: () => gsap.set($backdrop, {clearProps: 'transform,transformOrigin,visibility,clipPath'})
      })
    },
    afterEnter() {
      sliderApp();
    }
  };
  