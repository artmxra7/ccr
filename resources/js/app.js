require('./bootstrap');
require("sweetalert");

import Vue from 'vue';
import VueRouter from 'vue-router';
import Example from './components/ExampleComponent';
import ContactForm from './components/ContactForm';
import InfiniteLoading from 'vue-infinite-loading';

window.Vue = require('vue');
Vue.use(require('vue-resource'));
Vue.use(VueRouter);

// Vue.component("ExampleComponent", () => import("./components/ExampleComponent"));
/* Register our new component: */
Vue.component('contact-form', require('./components/ContactForm.vue'));
Vue.component('InfiniteLoading', require('vue-infinite-loading'));

const app = new Vue({
    el: '#app',
    components: { Example, ContactForm, InfiniteLoading }
}).$mount('#app');
