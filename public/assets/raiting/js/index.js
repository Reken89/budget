$(function() {
    "use strict";
       
// chart 15    
var points = $('div.hidden').data('points');
var max = $('div.hidden').data('max');
     
Highcharts.chart('chart15', {                          
    chart: {
        type: 'column'
        //styledMode: true
    },
    credits: {
        enabled: false
    },
    title: {
        text: 'Рейтинг среди учреждений'
    },
    xAxis: {
        categories: ['Max рейтинг среди учреждений', 'Ваш рейтинг']
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style && Highcharts.defaultOptions.title.style.color) || 'gray'

            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                //enabled: true
            }
        }
    },
    colors: ['#006400', '#00FF00'],
    series: [{
        name: 'Max рейтинг среди учреждений',
        data: [max, 0],
        color: '#006400'
    }, {
        name: 'Ваш рейтинг',
        data: [0, points],
        color: '#00FF00'
    }]
});


});	 
   