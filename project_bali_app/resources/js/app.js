

require('./bootstrap');
window.Vue = require('vue');

import VueRouter from "vue-router";
import routes from './routes';

Vue.use(VueRouter);




Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('datepicker-component', require('./components/datepickerComponent').default);



const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});



