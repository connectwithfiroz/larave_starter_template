$(function() {
	
	/*----Echart2----*/
	var chartdata2 = [{
		name: 'Organic Search',
		type: 'line',
		smooth: true,
		data: [12, 25, 12, 35, 12, 38, 11],
		color: ['#ea5d33']
	}, {
		name: 'Paid Search',
		type: 'line',
		smooth: true,
		size: 10,
		data: [8, 12, 28, 10, 10, 22, 15],
		color: ['#8645ff']
	}];
	var chart2 = document.getElementById('echart2');
	var barChart2 = echarts.init(chart2);
	var option2 = {
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
			data: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
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
		series: chartdata2,
		color: ['#ea5d33', '#b03cd5', '#8645ff', ]
	};
	barChart2.setOption(option2);
	/*----End Echart2----*/
	
	/*----AreaChart1----*/
	var ctx = document.getElementById( "AreaChart1" );
	var myChart = new Chart( ctx, {
		type: 'line',
		data: {
			labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
			type: 'line',
			datasets: [ {
				data: [45, 55, 32, 67, 49, 72, 52],
				label: 'Female Bounce Rate',
				backgroundColor: 'rgb(255,255,255,0.1)',
				borderColor: 'rgba(255,255,255,0.8)',
				borderWidth: '3',
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'transparent',
			}
			]
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
				titleFontColor: '#7886a0',
				bodyFontColor: '#7886a0',
				backgroundColor: '#fff',
				titleFontFamily: 'Montserrat',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 3,
				intersect: false,
			},
			scales: {
				xAxes: [ {
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				} ],
				yAxes: [ {
					display:false,
					ticks: {
						display: false,
					}
				} ]
			},
			title: {
				display: false,
			},
			elements: {
				line: {
					borderWidth: 1
				},
				point: {
					radius: 4,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	} );
	/*----End AreaChart1----*/

	/*----AreaChart2----*/
	var ctx = document.getElementById( "AreaChart2" );
	var myChart = new Chart( ctx, {
		type: 'line',
		data: {
			labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
			type: 'line',
			datasets: [ {
				data: [83, 73, 91, 85, 76, 90, 100],
				label: 'Male Bounce Rate',
				backgroundColor: 'rgb(255,134,69,0.3)',
				borderColor: 'rgba(255,134,69,0.8)',
				borderWidth: '3',
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'transparent',
			}
			]
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
				titleFontColor: '#7886a0',
				bodyFontColor: '#7886a0',
				backgroundColor: '#fff',
				titleFontFamily: 'Montserrat',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 3,
				intersect: false,
			},
			scales: {
				xAxes: [ {
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				} ],
				yAxes: [ {
					display:false,
					ticks: {
						display: false,
					}
				} ]
			},
			title: {
				display: false,
			},
			elements: {
				line: {
					borderWidth: 1
				},
				point: {
					radius: 4,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	} );
	/*----End AreaChart2----*/
	
	/*echart2*/
	var chartdata = [
		{
		  name: 'Sessions',
		  type: 'bar',
		  data: [10, 14, 9, 10, 7, 15, 12]
		},
		{
		  name: 'Bounce Rate',
		  type: 'bar',
		  data: [5, 6, 15, 7, 10,  9, 8]
		}
	];

	  var chart = document.getElementById('echart1');
	  var barChart = echarts.init(chart);

	  var option = {
		grid: {
		  top: '6',
		  right: '0',
		  bottom: '17',
		  left: '25',
		},
		xAxis: {
		  data: [ 'USA', 'India', 'UK', 'Canada', 'Germany', 'Japan', 'Russia'],
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
			axisPointer:
			{
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
		color:[ '#8645ff', '#45beff',]
	};
	barChart.setOption(option);
	/*--echart-2---*/
	
	/*---ChartJS (#pieChart)---*/
	var ctx = document.getElementById("pieChart");
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			datasets: [{
				data: [49, 38, 20, 35, 40],
				backgroundColor: ['#8645ff', '#ff8645', '#45beff', '#e345ff', '#45ff86'],
				hoverBackgroundColor: ['#8645ff', '#ff8645','#45beff', '#e345ff', '#45ff86'],
				borderColor:'transparent',
			}],
			labels: ["Organic Search", "Paid Search", "Direct", "Social", "Referral"]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				labels: {
					fontColor: "#a1a1a1"
				},
			},
		}
	});
	/*---ChartJS (#pieChart) closed---*/
	
});
