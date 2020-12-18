

require('./bootstrap');
window.Vue = require('vue');

import VueRouter from "vue-router";
import routes from './routes';

Vue.use(VueRouter);

//this bus allows  data across all components, despite of its hierarchy
export const serverBus = new Vue();

Vue.component('datepicker-component', require('./components/datepickerComponent').default);
Vue.component('searchResult-component', require('./components/searchResultComponent'));



const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});



