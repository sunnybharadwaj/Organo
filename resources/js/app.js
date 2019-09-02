import './bootstrap';
import router from './routes'

import SliderComponent from './components/partials/SliderComponent';
import TestimonialsComponent from './components/partials/TestimonialsComponent';
import SchoolCTAComponent from './components/partials/SchoolCTAComponent';
import StandardCTAComponent from './components/partials/StandardCTAComponent';
import FeatureComponent from './components/partials/FeatureComponent';

import FormContactComponent from './components/forms/FormContactComponent';


//Partials
Vue.component('SliderComponent', SliderComponent);
Vue.component('TestimonialsComponent', TestimonialsComponent);
Vue.component('SchoolCTAComponent', SchoolCTAComponent);
Vue.component('StandardCTAComponent', StandardCTAComponent);
Vue.component('FeatureComponent', FeatureComponent);

//Forms
Vue.component('FormContactComponent', FormContactComponent);

new Vue({
    el:'#app',
    // components: {
    //     NavComponent
    // },
    router
});
