import VueRouter from 'vue-router';
import {routes} from './routes';
import store from './store';

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


Vue.use(VueRouter);


const router = new VueRouter({
    routes,
    mode: 'history'
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('home', require('./components/Home.vue'));
Vue.component('posting', require('./components/Posting.vue'));
Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('status', require('./components/Status.vue'));
Vue.component('status-feed', require('./components/StatusFeed.vue'));
Vue.component('comment', require('./components/Comment.vue'));

const app = new Vue({
    el: '#app',
    router,
    store
});
