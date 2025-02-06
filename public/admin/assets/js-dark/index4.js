$(function() {
	'use strict';
	
	/*-----AreaChart Echart-----*/
	var ctx = document.getElementById("widgetChart1");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
			type: 'line',
			datasets: [{
				data: [24, 30, 20, 28, 39, 22, 40],
				label: '',
				backgroundColor: 'rgb(134,69,255,0.6)',
				borderColor: '#8645ff',
			}, ]
		},
		options: {
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			responsive: true,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 0,
				intersect: false,
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					display: false,
					ticks: {
						display: false,
					}
				}]
			},
			title: {
				display: false,
			},
			elements: {
				line: {
					borderWidth: 2
				},
				point: {
					radius: 0,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	});
	
	/*----Echart2----*/
	var chartdata = [{
		name: 'Production Volume',
		type: 'bar',
		data: [10, 15, 9, 18, 10, 15, 10, 15, 9, 18]
	}];
	var chart = document.getElementById('inventory');
	var barChart = echarts.init(chart);
	var option = {
		grid: {
			top: '6',
			right: '0',
			bottom: '17',
			left: '25',
		},
		xAxis: {
			data: ['Machine1', 'Machine2', 'Machine3', 'Machine4', 'Machine5', 'Machine6', 'Machine7', 'Machine8', 'Machine9', 'Machine10'],
			axisLine: {
				lineStyle: {
					color: 'rgba(161, 161, 161,0.3)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#bbc1ca'
			}
		},
		tooltip: {
			show: true,
			showContent: true,
			alwaysShowContent: true,
			triggerOn: 'mousemove',
			trigger: 'axis',
			axisPointer: {
				label: {
					show: false,
				}
			}
		},
		yAxis: {
			splitLine: {
				lineStyle: {
					color: 'rgba(161, 161, 161,0.3)'
				}
			},
			axisLine: {
				lineStyle: {
					color: 'rgba(161, 161, 161,0.3)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#bbc1ca'
			}
		},
		series: chartdata,
		color: ['#45beff']
	};
	barChart.setOption(option);
	
	/*---ChartJS (#pieChart)---*/
	var ctx = document.getElementById("pieChart");
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			datasets: [{
				data: [49, 38, 20],
				backgroundColor: ['#8645ff', '#ff8645', '#45beff'],
				hoverBackgroundColor: ['#8645ff', '#ff8645','#45beff'],
				borderColor:'transparent',
			}],
			labels: ["Broken Machine", "Missing Parts", "Service"]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				labels: {
					fontColor: "#bbc1ca"
				},
			},
		}
	});
	/*---ChartJS (#pieChart) closed---*/
	
	/*----Echart5----*/
	var chartdata3 = [{
		name: 'broken',
		type: 'bar',
		stack: 'Stack',
		data: [14, 18, 20, 14, 29, 21, 25, 14, 24]
	}, {
		name: 'Other reasons',
		type: 'bar',
		stack: 'Stack',
		data: [16, 19, 25, 41, 27, 32, 15, 32, 25]
	},
	{
		name: 'No reason',
		type: 'bar',
		stack: 'Stack',
		data: [12, 14, 15, 50, 24, 24, 10, 20, 30]
	}];
	var option5 = {
		grid: {
			top: '6',
			right: '0',
			bottom: '17',
			left: '25',
		},
		tooltip: {
			show: true,
			showContent: true,
			alwaysShowContent: true,
			triggerOn: 'mousemove',
			trigger: 'axis',
			axisPointer: {
				label: {
					show: false,
				}
			}
		},
		xAxis: {
			data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', '2017', '2018'],
			axisLine: {
				lineStyle: {
					color: 'rgba(161, 161, 161,0.3)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#bbc1ca'
			}
		},
		yAxis: {
			splitLine: {
				lineStyle: {
					color: 'rgba(161, 161, 161,0.3)'
				}
			},
			axisLine: {
				lineStyle: {
					color: 'rgba(161, 161, 161,0.3)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#bbc1ca'
			}
		},
		series: chartdata3,
		color: ['#ff8645', '#8645ff', '#45beff']
	};
	var chart5 = document.getElementById('echart5');
	var barChart5 = echarts.init(chart5);
	barChart5.setOption(option5);
	
});
