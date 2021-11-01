export const navBtn = function(el) {
    const navMobile = document.querySelector('.nav-mobile');
    // const logo = document.querySelector('.navbar-brand img');
    // const logoSrc = logo.getAttribute('src');
    // const logoDataSrc= logo.getAttribute('data-dark');
    el.addEventListener('click', navToggle.bind(this));
    
    function navToggle(e) {
        e.preventDefault();
        el.classList.toggle('is-open');
        navMobile.classList.toggle('is-open');
        // if(el.classList.contains('is-open')) {
        //     setTimeout(function(){
        //         logo.setAttribute('src', logoDataSrc);
        //     }, 400);
        // } else {
        //     setTimeout(function(){
        //         logo.setAttribute('src', logoSrc);
        //     }, 400);
        // }
    }
}