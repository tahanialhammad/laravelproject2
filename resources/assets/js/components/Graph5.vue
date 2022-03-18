<template>
 <div class="mt-4">
   <h1>test chart from youtube</h1>
   <div>
     <canvas id="chart5"></canvas>

   </div>

 </div>
</template>

<script>
import Chart from 'chart.js';

export default {
 name: "OrdersPerMonthChart",
 props: ['chartLables', 'chartdata', 'chartbgcolor'], 
 data() {
   return {
     monthLabels:['Jan111', 'Feb', 'March', 'dec'],
     orderssData: this.chartdata,
   }
 },
 methods: {
   generateChart() {
     let orderschart = document.getElementById('chart5').getContext('2d');


     this.orderschart = new Chart(orderschart, {
       type: 'line',
       data: {
        labels: this.monthLabels,
         datasets: [
           {
            label: 'chartoneLabel', 
             data: this.orderssData,
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
