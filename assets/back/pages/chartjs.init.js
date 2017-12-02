/**
Template Name: Uplon Dashboard
Author: CoderThemes
Email: coderthemes@gmail.com
File: Chartjs
*/


!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    //init
    ChartJs.prototype.init = function() {
        //creating lineChart
        var mount = [];
        var total = [];
        var url = window.location.href+"/getDateLineChart";
        $.post(url,function(data){
                var obj = $.parseJSON(data);
                $.each(obj,function(i,item){
                    mount.push(item.create_at);
                    total.push(item.total);
                });
            });

               /* param = ["January", "February", "March", "April", "May", "June", "July", "August", "September"];
                data = [65, 59, 80, 81, 56, 55, 40, 35, 30];*/
                
                var lineChart = {
                labels: mount,
                datasets: [
                {
                    label: "Orders Analytics",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#039cfd",
                    borderColor: "#039cfd",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#039cfd",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#039cfd",
                    pointHoverBorderColor: "#eef0f2",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: total
                }
            ]
        };

        var lineOpts = {
            scales: {
                yAxes: [{
                    ticks: {
                        min: 1,
                        stepSize: 5
                    }
                }]
            }
        };
        
        this.respChart($("#lineChart"),'Line',lineChart, lineOpts);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);

