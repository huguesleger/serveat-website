import {navBtn} from './components/nav';
import Splitting from 'splitting';
import {sliderApp} from './components/slider-app';
import { scrollToTop } from './components/scroll-top';
import { contactForm } from './components/contact-form';
import {initRouting} from './route';
import { loader } from './components/loader';

window.App = {};


export const App = window.App;
App.init = function() {
    Splitting();
    loader();
    initRouting();
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