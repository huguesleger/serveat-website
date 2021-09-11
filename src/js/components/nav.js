export const navBtn = function(el) {
    const navMobile = document.querySelector('.nav-mobile');
    el.addEventListener('click', navToggle.bind(this));
    
    function navToggle(e) {
        e.preventDefault();
        el.classList.toggle('is-open');
        navMobile.classList.toggle('is-open');
    }
}