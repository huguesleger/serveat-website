import LocomotiveScroll from 'locomotive-scroll';

export const scrollLoc = function() {
    const scrollContainer = new LocomotiveScroll({
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
}