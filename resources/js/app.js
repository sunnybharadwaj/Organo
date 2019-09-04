import './bootstrap';
import router from './routes'

import SliderComponent from './components/partials/SliderComponent';
import TestimonialsComponent from './components/partials/TestimonialsComponent';
import SchoolCTAComponent from './components/partials/SchoolCTAComponent';
import StandardCTAComponent from './components/partials/StandardCTAComponent';
import FeatureComponent from './components/partials/FeatureComponent';
import HelpComponent from './components/partials/HelpComponent';
import FeedbackComponent from './components/partials/FeedbackComponent';

import FormContactComponent from './components/forms/FormContactComponent';


//Partials
Vue.component('SliderComponent', SliderComponent);
Vue.component('TestimonialsComponent', TestimonialsComponent);
Vue.component('SchoolCTAComponent', SchoolCTAComponent);
Vue.component('StandardCTAComponent', StandardCTAComponent);
Vue.component('FeatureComponent', FeatureComponent);
Vue.component('HelpComponent', HelpComponent);
Vue.component('FeedbackComponent', FeedbackComponent);

//Forms
Vue.component('FormContactComponent', FormContactComponent);

new Vue({
    el:'#app',
    // components: {
    //     NavComponent
    // },
    router
});

//
// $(window).scroll(function() {
//     let scroll = $(window).scrollTop();
//     let Nav = $('nav');
//     if (scroll >= 1) {
//         Nav.removeClass('inverted');
//     } else if (scroll === 0) {
//         Nav.addClass('inverted');
//     }
// });

let FullScreenNav = $('nav .full-screen-nav');
//Menu opens when 'mobile-menu-button' is clicked
$('#mobile-menu-button').click(function() {
    FullScreenNav.removeClass('hidden');
});

$('#menu-close-button').click(function() {
    FullScreenNav.addClass('hidden');
});

$('.full-screen-nav .lg-button').click(function() {
    FullScreenNav.addClass('hidden');
});
