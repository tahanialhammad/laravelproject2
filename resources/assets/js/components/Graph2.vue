<template>
 <div class="mt-4">
   <h1>test chart2 winsgraph , V-5</h1>
   <div>
     <canvas id="mychart2"></canvas>
   </div>

 </div>
</template>

<script>
import Chart from 'chart.js';

export default {
 name: "OrdersPerMonthChart",
 props: ['player', 'opponent'],
 data() {
   return {
  //legend : '' //not work 
   }
 },
 methods: {
   generateChart() {
     let orderschart = document.getElementById('mychart2').getContext('2d');
     this.orderschart = new Chart(orderschart, {
       type: 'bar',
       data: {
        labels: ['Wins'],
         datasets: [
           {
            label:this.player.name, //passing lble from varable name json 
            backgroundColor :'green',
            data:[this.player.wins],
           },

         {
            label:this.opponent.name, //passing lble from varable name json 
            backgroundColor :'pink',
            data:[this.opponent.wins],
           },
         ]
       },

     }).Bar(data);
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
