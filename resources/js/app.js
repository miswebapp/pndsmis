require('./bootstrap').default;

import axios from 'axios';
import store from './store/index'
import VueFilterDateFormat from 'vue-filter-date-format';

window.Vue = require('vue');
window.Axios = axios;

Vue.component('projects', require('./components/Projects.vue').default)
Vue.component('filters', require('./components/Filters.vue').default)
Vue.use(VueFilterDateFormat);



const app = new Vue({
    el: '#app',
    store
});