<template>
 <div class="mt-4">
   <h1>test chart3 Render Monthly Revenue , V-6</h1>
   <div>
     <canvas id="mychart3"></canvas>
   </div>

 </div>
</template>

<script>
import Chart from 'chart.js';

export default {
 name: "reveneuPerMonthChart",
 props: {
   'url' : ''
   }, //not php prop but ajax
 data() {
   return {
//
   }
 },
 methods: {
   generateChart() {
     let orderschart = document.getElementById('mychart3').getContext('2d');
     this.orderschart = new Chart(orderschart, {
       type: 'line',
       data: {
     //   labels: this.keys, // array of keys, o
         labels: object.keys(Response.data), // object of keys
         datasets: [
           {
            label:'Revenue',
            backgroundColor :'green',
           // data:this.value, //array of value 
           //data : object.value(Response.data), //of if this method not avalible , then use
           data : object.keys(Response.data).map(key => Response.data[key] )
           },
         ]
       },

     }) ;
   },
 },
 mounted() {
   this.generateChart();
 }
};
</script>

<style scoped>
@media screen and (min-width: 768px) {
 select:last-child {
   width: 127px;
 }
}
</style>
