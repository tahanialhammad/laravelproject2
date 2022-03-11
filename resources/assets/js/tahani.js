// alert('Add custom js ');

const { Chart } = require("chart.js");

/*===== SHOW NAVBAR  =====*/
$(document).on('click', '#header-toggle', function () {
    const sidebar = $('#nav-bar'),
        bodypd = $('#body-pd'),
        toggle = $('#header-toggle');

    sidebar.toggleClass('collapsed');
    bodypd.toggleClass('body-pd');

    document.cookie = "sidebar-collapsed=" + sidebar.hasClass('show') + "; expires=Sun, 7 May 2028 12:00:00 UTC; path=/";
    document.cookie = "sidebar-collapsed=" + bodypd.hasClass('body-pd') + "; expires=Sun, 7 May 2028 12:00:00 UTC; path=/";
    document.cookie = "sidebar-collapsed=" + toggle.hasClass('open') + "; expires=Sun, 7 May 2028 12:00:00 UTC; path=/";
});



// chartjs
//static data for chart , we can add more than dataset , one data set for each user, but now we have only on 
// let data = {
//     labels: ['Jan', 'Feb', 'Maart', 'april', 'mei', 'juni', 'jull', 'aug', 'sept', 'okt', 'nov', 'dec'],
//     datasets: [
//         {
//             data: [10, 12, 11, 13, 5, 12, 10, 15, 15, 18, 20, 9],
//         }
//     ]
// };

 //let graph = document.querySelector('#graph').getContext('2d'); // returen object to drow the chart on the canvas

//  let graph = document.getElementById('graph').getContext('2d');


// //golbale chart and chose type of chart from chart js
// // line chart type and git it 2 argument  data and ptions line(data, {}) but now without option 
// new Chart(context).line(data);



// let massPopChart = new Chart(graph, {
//     type: 'line',
//     data: {
//         labels: ['Jan', 'Feb', 'Maart', 'april', 'mei', 'juni', 'jull', 'aug', 'sept', 'okt', 'nov', 'dec'],
//         datasets: [
//             {
//             label: 'level',
//             data: [10, 12, 20, 22, 30, 12, 10, 5, 15, 18],
//         },
//     ]
//     },
// });

