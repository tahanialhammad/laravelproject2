<!--Start Static new xCore-->
<template>
  <div class="mt-4">
    <div class="d-lg-flex justify-content-between mb-4">
<!--      <h5 class="fw-bold m-lg-0t mb-2 mb-lg-0">{{trans('xcorev2.orders_per_month')}}</h5>-->
      <h5 class="fw-bold m-lg-0t mb-2 mb-lg-0">Orders</h5>
      <form action="" class="form-sm">
        <div class="d-md-flex">
          <select class="form-select orm-select-sm rounded-pill me-3 ps-4 shadow-none mb-2 mb-sm-0" >
            <option value="1" selected>Alle apps</option>
            <option value="2">Lightspeed & Exact Online Premium</option>
            <option value="3">Two</option>
            <option value="4">Three</option>
          </select>
          <select class="form-select rounded-pill ps-4 shadow-none mb-2 mb-sm-0">
            <option selected>2021</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>

        </div>
      </form>
    </div>

    <div class="chart-xcore mb-4">
      <canvas id="order-chart"></canvas>
    </div>

  </div>
</template>

<script>
import Chart from 'chart.js';

export default {
  name: "OrdersPerMonthChart",
  props: ['appordersdata'],
  data() {
    return {
      monthLabels: ['Jan', 'Feb', 'Maart', 'april', 'mei', 'juni', 'jull', 'aug', 'sept', 'okt', 'nov', 'dec'],
      orderssData: [10, 12, 11, 13, 5, 12, 10, 15, 15, 18, 20, 9],
      //chartLabel: this.appordersdata['name'],
      //colors : this.appordersdata['color'],
    }
  },
  methods: {
    generateChart() {
      let orderschart = document.getElementById('order-chart').getContext('2d'),
          gradient = orderschart.createLinearGradient(0, 0, 0, 400),
          gradient2 = orderschart.createLinearGradient(0, 0, 0, 400);

      gradient.addColorStop(0, 'rgba(29, 220,191, 0.2)');
      gradient.addColorStop(1, 'rgba(255, 255,255, 0)');

      gradient2.addColorStop(0, 'rgba(240, 191, 86, 0.2)');
      gradient2.addColorStop(1, 'rgba(255, 255,255, 0)');

      this.orderschart = new Chart(orderschart, {
        type: 'line',
        data: {
          labels: this.monthLabels,
          datasets: [
            {
              label: 'Orders',
              // label :this.chartLabel,
              data: this.orderssData,
              backgroundColor: gradient,
              // backgroundColor: this.colors,
              // fillColor : gradient,
              fill: true,
              borderWidth: 2,
              borderColor: '#1ddcbf',
              pointBackgroundColor: '#1ddcbf',
              pointBorderColor: 'white',
              pointBorderWidth: 2,
              pointStyle: 'circle',
              pointRadius: 4,
              //  hoverBorderWidth: 3,
              //hoverBorderColor: '#000'
            },
            {
              label: 'Orders',
              // label :this.chartLabel,
              data: [8, 10, 12, 15, 14, 10, 15, 18, 14, 16, 14, 18],
              backgroundColor: gradient2,
              // backgroundColor: this.colors,
              // fillColor : gradient,
              fill: true,
              borderWidth: 2,
              borderColor: '#f0bf56',
              pointBackgroundColor: '#f0bf56',
              pointBorderColor: 'white',
              pointBorderWidth: 2,
              pointStyle: 'circle',
              pointRadius: 4,
              //  hoverBorderWidth: 3,
              //hoverBorderColor: '#000'
            },
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          title: {
            display: false,
          },
          elements: {
            line: {
              tension: 0.4
            }
          },
          scales: {
            yAxes: [
              {
                ticks: {
                  fontColor: "#b2b7be",
                  fontFamily: "montserrat",
                  fontStyle: "bold",
                  align: 'start', // niet werkt ???
                  padding: 15
                },
                gridLines: {
                  display: true,
                  drawBorder: false,
                  color: "#eaebed"
                }
              }
            ],
            xAxes: [
              {
                ticks: {
                  fontColor: "#333840",
                  fontFamily: "montserrat",
                  //fontSize: 18,
                  fontStyle: "bold",
                  padding: 15
                },
                gridLines: {
                  display: false,
                  // color: "#333840"
                }
              }
            ],
          },
          legend: {
            display: false,
            // labels: {
            //   fontColor: "red",
            //   fontSize: 16,
            // }
          },
          tooltips: {
            titleFontFamily: 'Montserrat',
            backgroundColor: '#333840',
            // titleFontColor: 'white',
            bodyFontColor: 'white',
            bodyFontFamily: 'Montserrat',
            caretSize: 10,
            cornerRadius: 10,
            xPadding: 20,
            yPadding: 20,
            usePointStyle: true,
          },
        },

      });
    },
    // getTranslation(text){
    //   return trans(text)
    // }
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
<!--End Static new xCore-->
