//old
// Vue.component('scroll-link', require('./components/ScrollLink.vue').default); //Golbal in project
// Vue.component('Info', require('./components/Info.vue').default); //Golbal in project
// Vue.component('Icons', require('./components/Icons.vue').default); //Golbal in project



import Vue from 'vue';

import Info from "./components/Info";
import Les1 from "./components/learnvue2/Les1.vue";
import Les3 from "./components/learnvue2/Les3.vue"; //les 3, 4
import Les5 from "./components/learnvue2/Les5.vue";




require('./bootstrap');

Vue.component('info', Info);
Vue.component('les1', Les1);
Vue.component('les3', Les3);
Vue.component('les5', Les5);



window.Vue = require('vue').default;

// Vue.component('Info', require('./components/Info.vue').default); //Golbal in project

const app = new Vue({
    el: '#app',
});


let data = {
    message : 'without vuejs value'
};
document.querySelector('#input1').value = data.message;

