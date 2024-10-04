$(function() {
    "use strict";

// chart
var point01 = 10000;
var point02 = 20000;
var point03 = 15000;
var point04 = 20000;
var point05 = 30000;

var ctx = document.getElementById('chart').getContext('2d');
 
var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke1.addColorStop(0, '#00FF7F');
    gradientStroke1.addColorStop(1, 'rgba(22, 195, 233, 0.1)');

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Школа1', 'Школа2', 'Школа3', 'Гимназия', 'ВСОШ', 'Ауринко', 'Березка', 'Ключик', 'Кораблик', 'Солнышко', 'СпортШкола', 'ЦВР', 'ДХШ', 'ДМШ', 'МАиЦБ', 'ЦКР', 'ЦРО', 'КУМС'],
            datasets: [{
                label: 'Рейтинг',
                data: [0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 0, 0, 0, 0],
                //lineTension: 0,
                pointBorderWidth: 2,
                pointHoverBackgroundColor: gradientStroke1,
                backgroundColor: gradientStroke1,
                borderColor: gradientStroke1,
                borderWidth: 3
            }]
        },
        options: {
	    maintainAspectRatio: false,
            legend:{
		position: 'bottom',
                display:false
            },
            tooltips:{
		displayColors:false,	
                mode: 'nearest',
                intersect: false,
                position: 'nearest',
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            }
        }
    });       
	  
});	





