require('./bootstrap').default;
window.Vue = require('vue');

import store from './store/index'
import VueFilterDateFormat from 'vue-filter-date-format';

Vue.component('projects', require('./components/Projects.vue').default)
Vue.use(VueFilterDateFormat);
const app = new Vue({
    el: '#app',
    store
});