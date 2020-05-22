/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError } from 'vform';

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
import VueRouter from 'vue-router';

Vue.use(VueRouter); 

import VModal from 'vue-js-modal';
Vue.use(VModal)
//window.Fire = new Vue();
Vue.component('header-component', require('./components/sections/Navigation_Components.vue').default);
Vue.component('admin-header', require('./components/admin_component/admin_nav.vue').default);

let routes = [
    { path: '/', name: 'Home', component: require('./components/sections/Index_Components.vue').default },
    { path: '/logincomp', name: 'Home', component: require('./components/sections/login_component.vue').default },
    { path: '/Register', name: 'Home', component: require('./components/sections/Register.vue').default },
  ]
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  });

const app = new Vue({
    el: '#app',
    router
});
