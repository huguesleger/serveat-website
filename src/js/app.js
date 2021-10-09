import {navBtn, scrollNavbar} from './components/nav';
import Splitting from 'splitting';
import {sliderApp} from './components/slider-app';
import { switchPricing } from './components/switch-pricing';
import { scrollToTop } from './components/scroll-top';

window.App = {};


export const App = window.App;
App.init = function() {
    Splitting()
    navBtn(document.querySelector('.btn-nav'));
    scrollNavbar();
    sliderApp();
    switchPricing();
    scrollToTop();
}







/*--------------------------------------------
    load function
---------------------------------------------*/    
window.addEventListener('load', function() {
    App.init();
});