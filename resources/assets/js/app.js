//old
// Vue.component('scroll-link', require('./components/ScrollLink.vue').default); //Golbal in project
// Vue.component('Info', require('./components/Info.vue').default); //Golbal in project
// Vue.component('Icons', require('./components/Icons.vue').default); //Golbal in project




//use bootstrap with vuejs
//npm install -s bootstrap-vue
// import Vue from 'vue'
// import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
// Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
// Vue.use(IconsPlugin)




import Vue from 'vue';
import VueResource from 'vue-resource'; //needs for chart 4 in V7 laracast charting and you

import Info from "./components/Info";
import ToolTip from "./components/ToolTip";
import TooltipBody from "./components/TooltipBody";
import Les1 from "./components/learnvue2/Les1.vue";
import Les3 from "./components/learnvue2/Les3.vue"; //les 3, 4
import Les5 from "./components/learnvue2/Les5.vue";
import Les6 from "./components/learnvue2/Les6.vue";
import Les7 from "./components/learnvue2/Les7.vue";
import Les9 from "./components/learnvue2/Les9.vue";
import Les10 from "./components/learnvue2/Les10.vue";
import Tabs from "./components/learnvue2/Tabs.vue";
import Tab from "./components/learnvue2/Tab.vue";
import Coupon from "./components/learnvue2/Coupon.vue";

import Graph from "./components/Graph.vue";
import Graph2 from "./components/Graph2.vue";
import Graph3 from "./components/Graph3.vue";
import Graph4 from "./components/Graph4.vue";
//tray graph with parent en chield chart and you v-8
import Parentgraph from "./components/Parentgraph.vue";
import Childgraph from "./components/Childgraph.vue";



 // tray to use tooltip van Jefry way , i chang name van import to Jtooltip to reduce duplication 

import JtoolTip from 'tooltip.js';


require('./bootstrap');






Vue.component('info', Info);
Vue.component('les1', Les1);
Vue.component('les3', Les3);
Vue.component('les5', Les5);
Vue.component('les6', Les6);
Vue.component('les7', Les7);
Vue.component('les9', Les9);
Vue.component('les10', Les10);
Vue.component('tabs', Tabs);
Vue.component('tab', Tab);
Vue.component('coupon', Coupon);
Vue.component('tool-tip', ToolTip);
Vue.component('tooltip-body', TooltipBody);

Vue.component('graph', Graph);
Vue.component('graph2', Graph2);
Vue.component('graph3', Graph3);
Vue.component('graph4', Graph4);
Vue.component('parentgraph', Parentgraph);
Vue.component('childgraph', Childgraph);

// Vue.component('tabs', {
//     template: `
//         <div>
//             <div class="tabs">
//                 <ul>
//                     <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
//                         <a :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>
//                     </li>
//                 </ul>
//             </div>
//             <div class="tabs-details">
//                 <slot></slot>
//             </div>
//         </div>
//     `,

//     data() {
//         return { tabs: [] };
//     },

//     created() {
//         this.tabs = this.$children;
//     },

//     methods: {
//         selectTab(selectedTab) {
//             this.tabs.forEach(tab => {
//                 tab.isActive = (tab.href == selectedTab.href);
//             });
//         }
//     }
// });


// Vue.component('tab', {
//     template: `
//         <div v-show="isActive"><slot></slot></div>
//     `,

//     props: {
//         name: { required: true },
//         selected: { default: false }
//     },

//     data() {
//         return {
//             isActive: false
//         };
//     },

//     computed: {
//         href() {
//             return '#' + this.name.toLowerCase().replace(/ /g, '-'); //return name of tab splist alle space globaly with - dash
//         }
//     },

//     mounted() {
//         this.isActive = this.selected;
//     },
// });




// Jefery tooltip step 3 (Option #2)
Vue.directive('jtooltip',{
    bind(elem, bindings){
     //   console.log(bindings);

     new Jtooltip(elem, {
       // placement : 'top',
       placement : bindings.arg,
        title : bindings.value,
       })

       
    }
})




// Jefery tooltip step 4 (Option #3) register tooltip template
import Jtemptooltip from "./components/jtemptooltip";

Vue.component('jtemptooltip', Jtemptooltip)



window.Vue = require('vue').default;

// Vue.component('Info', require('./components/Info.vue').default); //Golbal in project

Vue.use(VueResource); //needs for chart 4 in V7 laracast charting and you


const app = new Vue({
    el: '#app',

    // tray to use tooltip van Jefry way
    mounted(){
        //select aany elemnt with data atrabuit tooltip , and loop over them 
        document.querySelectorAll('[data-jtooltip]').forEach(elem =>{
           // console.log(elem); // to finde the element 
           //now we need to register tooltip by using tooltip.js this build on popper
           //npm install tooltip.js   , and then run watch 
           //generate tooltip in the element with som configuraytion
           //not work jet step 1
        //    new Jtooltip(elem, {
        //        placement : 'top',
        //        title : "Hardcode title of the tooltip"

        //step 2
        new Jtooltip(elem, {
            placement : 'top',
            title : elem.dataset.jtooltip

           })



           //step 3 with dedcated vue directive
        })
    }

});


let data = {
    message : 'without vuejs value'
};
document.querySelector('#input1').value = data.message;

