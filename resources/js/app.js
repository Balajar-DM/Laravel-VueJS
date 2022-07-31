require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue';
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
    {path: '/data-user',component:require('./components/Pengguna/DataPengguna.vue').default},
    {path: '/data-level',component:require('./components/Pengguna/DataLevel.vue').default},
]

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router
});
