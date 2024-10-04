$(function() {
    "use strict";

// chart
var point01 = $('div.hidden').data('point01');
var point02 = $('div.hidden').data('point02');
var point03 = $('div.hidden').data('point03');
var point04 = $('div.hidden').data('point04');
var point05 = $('div.hidden').data('point05');
var point06 = $('div.hidden').data('point06');
var point07 = $('div.hidden').data('point07');
var point08 = $('div.hidden').data('point08');
var point09 = $('div.hidden').data('point09');
var point10 = $('div.hidden').data('point10');
var point11 = $('div.hidden').data('point11');
var point12 = $('div.hidden').data('point12');
var point13 = $('div.hidden').data('point13');
var point14 = $('div.hidden').data('point14');
var point15 = $('div.hidden').data('point15');
var point16 = $('div.hidden').data('point16');
var point17 = $('div.hidden').data('point17');
var point18 = $('div.hidden').data('point18');

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
                data: [point01, point02, point03, point04, point05, point06, point07, point08, point09, point10, point11, point12, point13, point14, point15, point16, point17, point18],
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





