import { gsap } from "gsap";

export const titleDemo = function() {
    const title = document.querySelectorAll('.title-demo .word > .char, .title-demo .whitespace');
    const subtitle = document.querySelectorAll('.subtitle-demo .word > .char, .subtitle-demo .whitespace');
    const txt = document.querySelectorAll('.txt-demo .word > .char, .txt-demo .whitespace');


    const tlSettings = {
        staggerVal: 0.015,
        charsDuration: 0.7
    }
    const tl = new gsap.timeline();

    tl.to(title, {
        y: 0,
        opacity: 1,
        ease: "Power2.easeInOut",
        duration: tlSettings.charsDuration,
        stagger: tlSettings.staggerVal,
    })
    .to(subtitle, {
        y: 0,
        opacity: 1,
        ease: "Power2.easeInOut",
        duration: tlSettings.charsDuration,
        stagger: tlSettings.staggerVal,
    },"-=1")
    .to(txt, {
        y: 0,
        opacity: 1,
        ease: "Power2.easeInOut",
        duration: tlSettings.charsDuration,
        stagger: tlSettings.staggerVal,
    },"-=0.5")
}