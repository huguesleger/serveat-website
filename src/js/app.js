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
    const wrapLoader = document.querySelector('.loader');
    if(wrapLoader) {
        loader();
    }
    initRouting();
    const nav = document.querySelector('#nav');
    if(nav) {
        navBtn(document.querySelector('.btn-nav'));
    }
    const slider = document.querySelector('.slider-device');
    if (slider) {
      sliderApp()
    }
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