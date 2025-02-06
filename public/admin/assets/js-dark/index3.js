$(function() {
	'use strict';
	
	/* sparkline_bar1 */
	$(".sparkline_bar1").sparkline([2, 4, 3, 4, 5, 4,5,3,4,5,2,4,5,4,3,5,4,3,4,5,2,4,5,4,3,5,4,3,4,5,2,4,5,4,3,5,4,3,4,5], {
		type: 'bar',
		height: 60,
		width:250,
		barWidth: 5,
		barSpacing: 7,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#6e00ff'
	});
	/* sparkline_bar1 end */
	
	/* Echart1 */
	var chartdata = [
		{
		  name: 'Tickets',
		  type: 'bar',
		  data: [13, 17, 19, 10, 17, 11, 19, 10, 17, 19, 10, 17, 11, 19]
		},
		{
			name: 'Average',
			type: 'line',
			smooth: true,
			data: [8, 5, 25, 10, 10, 8, 16, 18, 5, 25, 10, 10, 8, 16]
		},
		{
		  name: 'Chat',
		  type: 'bar',
		  data: [15, 16, 17, 18, 19, 10, 15, 12, 16, 17, 18, 19, 10, 15]
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
		  data: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
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
		color:[ '#8645ff', '#45beff', '#ff8645',]
	};
	barChart.setOption(option);
	/*-- Echart-1 ---*/
	
	/*-----Ticket1-----*/
    var ctx = document.getElementById( "Ticket1" );
	ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
                data: [45, 55, 32, 67, 49, 72, 52],
                label: 'tickets',
                backgroundColor: 'rgb(134,69,255,0.7)',
                borderColor: 'rgba(134,69,255, 0.9)',
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
	
	/*-----Ticket2-----*/
    var ctx = document.getElementById( "Ticket2" );
	ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
                data: [45, 55, 42, 67, 49, 62, 52],
                label: 'tickets',
                backgroundColor: 'rgb(255,134,69,0.7)',
                borderColor: 'rgba(255,134,69, 0.9)',
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
	
	/*-----Ticket3-----*/
    var ctx = document.getElementById( "Ticket3" );
	ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
                data: [45, 55, 32, 67, 39, 72, 52],
                label: 'tickets',
                backgroundColor: 'rgb(69,190,255,0.7)',
                borderColor: 'rgba(69,190,255, 0.9)',
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
	
	/*-----Ticket4-----*/
    var ctx = document.getElementById( "Ticket4" );
	ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
                data: [45, 55, 42, 67, 49, 72, 52],
                label: 'tickets',
                backgroundColor: 'rgb(227,69,255,0.7)',
                borderColor: 'rgba(227,69,255, 0.9)',
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
	
	/*----DonutChart----*/
 	var donut = new Morris.Donut({
 		element: 'tickets-chart',
 		resize: true,
 		colors: ['#8645ff', '#ff8645', '#45beff'],
 		data: [{
 			label: "Urgent",
 			value: 12
 		}, {
 			label: "High",
 			value: 20
 		}, {
 			label: "Normal",
 			value: 48
 		}],
		labelColor:"#555858",
 		hideHover: 'auto'
 	});
	
	/*-----echart6-----*/
	var chartdata3 = [
		{
		  name: 'Avg response time',
		  type: 'bar',
		  stack: 'Donors',
		  data: [14, 18, 20, 14, 29, 21, 17]
		},
	];
	var chart6 = document.getElementById('echart6');
	var barChart6 = echarts.init(chart6);
	
	var option6 = {
		grid: {
		  top: '6',
		  right: '10',
		  bottom: '17',
		  left: '32',
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
		xAxis: {
		  type: 'value',
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
		  type: 'category',
		   data: ['Mon', 'Tues', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'],
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
		color:[ '#8645ff ']
	};
	barChart6.setOption(option6);

});