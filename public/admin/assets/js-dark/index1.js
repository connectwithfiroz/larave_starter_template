$(function() {
	'use strict';
	
	/* sparkline_bar1 */
	$(".sparkline_bar1").sparkline([2, 4, 3, 4, 5, 4,5,3,4,5,2,4,5,4,3,5,4,3,4,5], {
		type: 'bar',
		height: 50,
		width:250,
		barWidth: 5,
		barSpacing: 7,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#6e00ff'
	});
	/* sparkline_bar1 end */
	
	/* sparkline_bar1 */
	$(".sparkline_bar2").sparkline([3, 5, 4, 4, 5, 4,5,3,4,5,3,4,5,4,3,5,4,3,4,5], {
		type: 'bar',
		height: 50,
		width:250,
		barWidth: 5,
		barSpacing: 7,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#ff8645'
	});
	/* sparkline_bar1 end */
	
	/* Echart1 */
	var chartdata = [
		{
		  name: 'Within Time Limit',
		  type: 'bar',
		  data: [10, 7, 9, 10, 7, 11, 9]
		},
		{
		  name: 'Out of Time Limit',
		  type: 'bar',
		  data: [5, 6, 17, 8, 9, 10, 9]
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
		  data: [ 'Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
		  axisLine: {
			lineStyle: {
			  color: 'rgba(0,0,0,0.03)'
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
			  color: 'rgba(0,0,0,0.03)'
			}
		  },
		  axisLine: {
			lineStyle: {
			  color: 'rgba(0,0,0,0.03)'
			}
		  },
		  axisLabel: {
			fontSize: 10,
			color: '#bbc1ca'
		  }
		},
		series: chartdata,
		color:[ '#8645ff', '#ff8645',]
	};
	barChart.setOption(option);
	/*-- Echart-1 ---*/
	
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
				backgroundColor: 'rgb(69,190,255,0.6)',
				borderColor: '#45beff',
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
	
	/*-----AreaChart Echart-----*/
	var ctx = document.getElementById("widgetChart-2");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
			type: 'line',
			datasets: [{
				data: [24, 30, 20, 28, 39, 22, 40],
				label: '',
				backgroundColor: 'rgb(255,255,255,0.1)',
				borderColor: 'rgba(255,255,255,0.8)',
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
	
	/*---ChartJS (#widgetChart2)---*/
    var ctx = document.getElementById( "widgetChart2" );
    ctx.height = 70;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            type: 'line',
            datasets: [ {
                data: [1, 18, 9, 17, 34, 22, 11],
                label: 'Avg loading time',
                backgroundColor: 'transparent',
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
                    borderWidth: 3
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    } );
	/*---ChartJS (#widgetChart2) closed---*/
	
	/*---ChartJS (#widgetChart3)---*/
	var ctx = document.getElementById( "widgetChart3" );
    ctx.height = 70;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            type: 'line',
            datasets: [ {
                data: [2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2],
                label: 'Avg Loading Weight',
                backgroundColor: 'transparent',
                borderColor: '#ff8645',
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
                    borderWidth: 3
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });
	/*---ChartJS (#widgetChart3) closed---*/
	
	/*----Morris (#donutchart)----*/
	var donut = new Morris.Donut({
		element: 'donutchart',
		resize: true,
		colors: ['#8645ff', '#ff8645', '#45beff','#e345ff'],
		data: [{
			label: " Germany",
			value: 30
		}, {
			label: "France",
			value: 40
		}, {
			label: "Switzerland",
			value: 10
		},  {
			label: "Austria",
			value: 20
		}],
		labelColor:"#fff",
		hideHover: 'auto'
	});
	/*----Morris (#donutchart) closed----*/
	
	
	/*----Echart2----*/
	var chartdata = [{
		name: 'Carrying Costs Of Inventory',
		type: 'bar',
		data: [10, 15, 9, 18, 10, 15]
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
			data: ['Risk', 'Service', 'Storage', 'Admin', 'Freight'],
			axisLine: {
				lineStyle: {
					color: 'rgba(0,0,0,0.03)'
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
					color: 'rgba(0,0,0,0.03)'
				}
			},
			axisLine: {
				lineStyle: {
					color: 'rgba(0,0,0,0.03)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#bbc1ca'
			}
		},
		series: chartdata,
		color: ['#8645ff']
	};
	barChart.setOption(option);
});