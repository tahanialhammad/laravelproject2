<template>
 <div class="mt-4">
   <h1>test chart</h1>
   <div>
     <canvas id="order-chart"></canvas>
     <!-- to use this canavase in more than one time, so without id -->
         <!-- <canvas></canvas> -->
   </div>

 </div>
</template>

<script>
import Chart from 'chart.js';

export default {
 name: "OrdersPerMonthChart",
 props: ['chartLables', 'chartdata', 'chartbgcolor'], //in stap 2, in V-3
 data() {
   return {
     monthLabels:['Jan111', 'Feb', 'March', 'dec'],
    // monthLabels: this.chartLables, //werkt niet goed met prop lable
     orderssData: this.chartdata,
   }
 },
 methods: {
   generateChart() {
     let orderschart = document.getElementById('order-chart').getContext('2d');
//to loop throught all chart without id 
//let orderschart = this.$el.getContext('2d'); //not work

     this.orderschart = new Chart(orderschart, {
       type: 'line',
       data: {
        labels: this.monthLabels,
         datasets: [
           {
            label: 'chartoneLabel', // this is the Legends V-4 , we can identefy chart from legend , but i dident do that 
            // data : [10,20,5], //stap 1v 1 in charting-and-you, in stap 2 data uiside vue from prop,in blade V-3
             data: this.orderssData,
            // backgroundColor : 'green',
            backgroundColor : this.chartbgcolor,
           },
      
         ]
       },

     });
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
