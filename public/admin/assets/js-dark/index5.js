$(function() {
	
	/*wideget1 */
	var ctx = document.getElementById("widege1");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Mon", "Tues", "Wed", "Thur", "Fri", "Sat", "Sun"],
			type: 'line',
			datasets: [{
				label: "Clicks",
				data: [5, 105, 26, 145, 65, 172, 182],
				backgroundColor: 'rgba(134,69,255,0.8)',
				borderColor: '#8645ff',
				borderWidth: 0,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#ad59ff',
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: 'rgba(0,0,0,0.9)',
				bodyFontColor: 'rgba(0,0,0,0.9)',
				backgroundColor: '#fff',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 0,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					display: false,
					gridLines: {
						color: 'rgba(161, 161, 161,0.3)'
					},
					scaleLabel: {
						display: false,
						labelString: '',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}],
				yAxes: [{
					display: false,
					gridLines: {
						display: false,
						drawBorder: true
					},
					scaleLabel: {
						display: false,
						labelString: 'Customer retention in %',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/*wideget1*/
	
	/*wideget2 */
	var ctx = document.getElementById("widege2");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Mon", "Tues", "Wed", "Thur", "Fri", "Sat", "Sun"],
			type: 'line',
			datasets: [{
				label: "Shares",
				data: [15, 165, 76, 135, 165, 92, 152],
				backgroundColor: 'rgba(255,134,69,0.8)',
				borderColor: '#ff8645',
				borderWidth: 0,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#ad59ff',
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: 'rgba(0,0,0,0.9)',
				bodyFontColor: 'rgba(0,0,0,0.9)',
				backgroundColor: '#fff',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 0,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					display: false,
					gridLines: {
						color: 'rgba(161, 161, 161,0.3)'
					},
					scaleLabel: {
						display: false,
						labelString: '',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}],
				yAxes: [{
					display: false,
					gridLines: {
						display: false,
						drawBorder: true
					},
					scaleLabel: {
						display: false,
						labelString: 'Customer retention in %',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/*wideget2*/
	
	/*wideget3 */
	var ctx = document.getElementById("widege3");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Mon", "Tues", "Wed", "Thur", "Fri", "Sat", "Sun"],
			type: 'line',
			datasets: [{
				label: "Likes",
				data: [29, 95, 46, 125, 165, 102, 152],
				backgroundColor: 'rgb(255,255,255,0.1)',
				borderColor: 'rgba(255,255,255,0.8)',
				borderWidth: 0,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#ad59ff',
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: 'rgba(0,0,0,0.9)',
				bodyFontColor: 'rgba(0,0,0,0.9)',
				backgroundColor: '#fff',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 0,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					display: false,
					gridLines: {
						color: 'rgba(161, 161, 161,0.3)'
					},
					scaleLabel: {
						display: false,
						labelString: '',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}],
				yAxes: [{
					display: false,
					gridLines: {
						display: false,
						drawBorder: true
					},
					scaleLabel: {
						display: false,
						labelString: 'Customer retention in %',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/*wideget3*/
	
	/*wideget4 */
	var ctx = document.getElementById("widege4");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Mon", "Tues", "Wed", "Thur", "Fri", "Sat", "Sun"],
			type: 'line',
			datasets: [{
				label: "Comments",
				data: [16, 135, 96, 155, 85, 192, 242],
				backgroundColor: 'rgb(255,255,255,0.1)',
				borderColor: 'rgba(255,255,255,0.8)',
				borderWidth: 0,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#ad59ff',
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: 'rgba(0,0,0,0.9)',
				bodyFontColor: 'rgba(0,0,0,0.9)',
				backgroundColor: '#fff',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 0,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					display: false,
					gridLines: {
						color: 'rgba(161, 161, 161,0.3)'
					},
					scaleLabel: {
						display: false,
						labelString: '',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}],
				yAxes: [{
					display: false,
					gridLines: {
						display: false,
						drawBorder: true
					},
					scaleLabel: {
						display: false,
						labelString: 'Customer retention in %',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/*wideget4*/
	
	/*---ChartJS (#lineChart)---*/
	var ctx = document.getElementById( "lineChart" );
	ctx.height = 270;
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
			datasets: [{
				label: "visitors",
				borderColor: "rgba(134,69,255, 0.9)",
				borderWidth: "1",
				backgroundColor: "rgba(134,69,255, 0.8)",
				data: [0, 30, 10, 90, 50, 63, 102]
			}, {
				label: "returning Visitors",
				borderColor: "rgba(69,190,255 ,0.9)",
				borderWidth: "1",
				backgroundColor: "rgba(	69,190,255, 0.7)",
				pointHighlightStroke: "rgba(69,190,255 ,0.9)",
				data: [0, 50, 40, 80, 40, 79, 120]
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				intersect: false
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#bbc1ca",
					 },
					gridLines: {
						color: 'rgba(161, 161, 161,0.3)'
					}
				}],
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: "#bbc1ca",
					},
					gridLines: {
						color: 'rgba(161, 161, 161,0.3)'
					},
				}]
			},
			legend: {
				labels: {
					fontColor: "#bbc1ca"
				},
			},
		}
	});
	/*---ChartJS (#lineChart) closed---*/
	
	
	/*---ChartJS (#subscriber1)---*/
    var ctx = document.getElementById( "subscriber1" );
    ctx.height = 110;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            type: 'line',
            datasets: [ {
                data: [1, 18, 9, 17, 34, 22, 11],
                label: 'Total Subscribers',
                backgroundColor: 'transparent',
                borderColor: '#e345ff',
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
	/*---ChartJS (#subscriber1) closed---*/
	
	/*---ChartJS (#subscriber2)---*/
    var ctx = document.getElementById( "subscriber2" );
    ctx.height = 110;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            type: 'line',
            datasets: [ {
                data: [1, 18, 9, 17, 34, 22, 11],
                label: 'Published Articles',
                backgroundColor: 'transparent',
                borderColor: '#4561ff',
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
	/*---ChartJS (#subscriber2) closed---*/
	
	/*----Morris (#donutchart)----*/
	var donut = new Morris.Donut({
		element: 'donutchart',
		resize: true,
		colors: ['#8645ff', '#ff8645', '#45beff'],
		data: [{
			label: " Politics",
			value: 30
		}, {
			label: "Sport",
			value: 40
		}, {
			label: "Economy",
			value: 20
		}],
		labelColor:"#555858",
		hideHover: 'auto'
	});
	/*----Morris (#donutchart) closed----*/

});
