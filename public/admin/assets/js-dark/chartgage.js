$(function(e){
  'use strict';

	//gauge chart
	var chart_gauge_settings = {
	  lines: 12,
	  angle: 0,
	  lineWidth: 0.4,
	  pointer: {
		  length: 0.75,
		  strokeWidth: 0.042,
		  color: '#212529'
	  },
	  limitMax: 'false',
	  colorStart: '#8645ff',
	  colorStop: '#8645ff',
	  strokeColor: '#200f42',
	  generateGradient: true
	};

	//chart_gauge_01
	if ($('#chart_gauge_01').length){

		var chart_gauge_01_elem = document.getElementById('chart_gauge_01');
		var chart_gauge_01 = new Gauge(chart_gauge_01_elem).setOptions(chart_gauge_settings);

	}

	//gauge-text
	if ($('#gauge-text').length){

		chart_gauge_01.maxValue = 6000;
		chart_gauge_01.animationSpeed = 32;
		chart_gauge_01.set(3200);
		chart_gauge_01.setTextField(document.getElementById("gauge-text"));

	}

	//chart_gauge_02
	if ($('#chart_gauge_02').length){

		var chart_gauge_02_elem = document.getElementById('chart_gauge_02');
		var chart_gauge_02 = new Gauge(chart_gauge_02_elem).setOptions(chart_gauge_settings);

	}
	
	//gauge-text2
	if ($('#gauge-text2').length){

		chart_gauge_02.maxValue = 9000;
		chart_gauge_02.animationSpeed = 32;
		chart_gauge_02.set(2400);
		chart_gauge_02.setTextField(document.getElementById("gauge-text2"));

	}

	//chart_gauge_03
	if ($('#chart_gauge_03').length){

		var chart_gauge_03_elem = document.getElementById('chart_gauge_03');
		var chart_gauge_03 = new Gauge(chart_gauge_03_elem).setOptions(chart_gauge_settings);
	}
	
	//gauge-text3
	if ($('#gauge-text3').length){

		chart_gauge_03.maxValue = 6000;
		chart_gauge_03.animationSpeed = 53;
		chart_gauge_03.set(5400);
		chart_gauge_03.setTextField(document.getElementById("gauge-text3"));

	}
});