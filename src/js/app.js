import {navBtn} from './components/nav';
import Splitting from 'splitting';
import {sliderApp} from './components/slider-app';
import { scrollToTop } from './components/scroll-top';
import { contactForm } from './components/contact-form';
import {initRouting} from './route';

window.App = {};


export const App = window.App;
App.init = function() {
    initRouting();
    Splitting();
    navBtn(document.querySelector('.btn-nav'));
    sliderApp();
    scrollToTop();
    const contact = document.querySelector('.wrap-form-contact');
    if(contact) {
        contactForm();
    }
}







/*--------------------------------------------
    load function
---------------------------------------------*/    
window.addEventListener('load', function() {
    App.init();
});