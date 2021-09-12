import {navBtn, scrollNavbar} from './components/nav';
import Splitting from 'splitting';

window.App = {};


export const App = window.App;
App.init = function() {
    Splitting()
    navBtn(document.querySelector('.btn-nav'));
    scrollNavbar();
}







/*--------------------------------------------
    load function
---------------------------------------------*/    
window.addEventListener('load', function() {
    App.init();
});