import Vue from 'vue';
import Info from "./components/Info";

require('./bootstrap');

Vue.component('info', Info);

window.Vue = require('vue').default;

// Vue.component('Info', require('./components/Info.vue').default); //Golbal in project

const app = new Vue({
    el: '#app',
});