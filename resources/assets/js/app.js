require('./bootstrap');

window.Vue = require('vue').default;

// Vue.component('Info', require('./components/Info.vue').default); //Golbal in project

const app = new Vue({
    el: '#app',
});