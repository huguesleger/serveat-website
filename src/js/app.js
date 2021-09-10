import {navBtn} from './components/nav';
import Splitting from 'splitting';

window.App = {};


export const App = window.App;
App.init = function() {
    Splitting()
    navBtn(document.querySelector('.btn-nav'));
}







/*--------------------------------------------
    load function
---------------------------------------------*/    
window.addEventListener('load', function() {
    App.init();
});