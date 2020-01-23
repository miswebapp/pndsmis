require('./bootstrap');
window.Vue = require('vue');

import store from './store/index'

Vue.component('projectsComponent', require('./components/Projects.vue'))

const app = new Vue({
    el: '#app',
    store
});