//old
// Vue.component('scroll-link', require('./components/ScrollLink.vue').default); //Golbal in project
// Vue.component('Info', require('./components/Info.vue').default); //Golbal in project
// Vue.component('Icons', require('./components/Icons.vue').default); //Golbal in project



import Vue from 'vue';

import Info from "./components/Info";
import Les1 from "./components/learnvue2/Les1.vue";
import Les3 from "./components/learnvue2/Les3.vue"; //les 3, 4
import Les5 from "./components/learnvue2/Les5.vue";
import Les6 from "./components/learnvue2/Les6.vue";
import Les7 from "./components/learnvue2/Les7.vue";
import Les9 from "./components/learnvue2/Les9.vue";
import Les10 from "./components/learnvue2/Les10.vue";
// import Tabs from "./components/learnvue2/Tabs.vue";
// import Tab from "./components/learnvue2/Tab.vue";



require('./bootstrap');

Vue.component('info', Info);
Vue.component('les1', Les1);
Vue.component('les3', Les3);
Vue.component('les5', Les5);
Vue.component('les6', Les6);
Vue.component('les7', Les7);
Vue.component('les9', Les9);
Vue.component('les10', Les10);
// Vue.component('tabs', Tabs);
// Vue.component('tab', Tabs);




Vue.component('tabs', {
    template: `
        <div>
            <div class="tabs">
                <ul>
                    <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
                        <a :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>
                    </li>
                </ul>
            </div>
            <div class="tabs-details">
                <slot></slot>
            </div>
        </div>
    `,

    data() {
        return { tabs: [] };
    },

    created() {
        this.tabs = this.$children;
    },

    methods: {
        selectTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = (tab.href == selectedTab.href);
            });
        }
    }
});


Vue.component('tab', {
    template: `
        <div v-show="isActive"><slot></slot></div>
    `,

    props: {
        name: { required: true },
        selected: { default: false }
    },

    data() {
        return {
            isActive: false
        };
    },

    computed: {
        href() {
            return '#' + this.name.toLowerCase().replace(/ /g, '-');
        }
    },

    mounted() {
        this.isActive = this.selected;
    },
});










window.Vue = require('vue').default;

// Vue.component('Info', require('./components/Info.vue').default); //Golbal in project

const app = new Vue({
    el: '#app',
});


let data = {
    message : 'without vuejs value'
};
document.querySelector('#input1').value = data.message;

