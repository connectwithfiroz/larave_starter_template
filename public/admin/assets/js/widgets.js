$(function() {
	'use strict';
	
	window.Apex = {
		stroke: {
			width: 3
		},
		markers: {
			size: 0
		},
		tooltip: {
			fixed: {
				enabled: true,
			}
		}
	};
	
	/*----Chart1----*/
	var options1 = {
		chart: {
			type: 'line',
			width: '100%',
			height: 45,
			sparkline: {
				enabled: true
			}
		},
		stroke: {
			colors: '#ea5d33',
		},
		series: [{
			data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
		}],
		tooltip: {
			fixed: {
				enabled: false
			},
			x: {
				show: false
			},
			y: {
				title: {
					formatter: function(seriesName) {
						return ''
					}
				}
			},
			marker: {
				show: false
			}
		}
	}
	
	/*----Chart2----*/
	var options2 = {
		chart: {
			type: 'line',
			width:'100%',
			height: 45,
			sparkline: {
				enabled: true
			}
		},
		stroke: {
			colors: '#8645ff',
		},
		series: [{
			data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14]
		}],
		tooltip: {
			fixed: {
				enabled: false
			},
			x: {
				show: false
			},
			y: {
				title: {
					formatter: function(seriesName) {
						return ''
					}
				}
			},
			marker: {
				show: false
			}
		}
	}
	
	/*----Chart3----*/
	var options3 = {
		chart: {
			type: 'line',
			width: '100%',
			height: 45,
			sparkline: {
				enabled: true
			}
		},
		stroke: {
			colors: '#31c92e',
		},
		series: [{
			data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82]
		}],
		tooltip: {
			fixed: {
				enabled: false
			},
			x: {
				show: false
			},
			y: {
				title: {
					formatter: function(seriesName) {
						return ''
					}
				}
			},
			marker: {
				show: false
			}
		}
	}
	
	/*----Chart4----*/
	var options4 = {
		chart: {
			type: 'line',
			width: '100%',
			height: 45,
			sparkline: {
				enabled: true
			}
		},
		stroke: {
			colors: '#3ebaef',
		},
		series: [{
			data: [15, 75, 47, 65, 14, 2, 41, 54, 4, 27, 15]
		}],
		tooltip: {
			fixed: {
				enabled: false
			},
			x: {
				show: false
			},
			y: {
				title: {
					formatter: function(seriesName) {
						return ''
					}
				}
			},
			marker: {
				show: false
			}
		}
	}
	new ApexCharts(document.querySelector("#chart1"), options1).render();
	new ApexCharts(document.querySelector("#chart2"), options2).render();
	new ApexCharts(document.querySelector("#chart3"), options3).render();
	new ApexCharts(document.querySelector("#chart4"), options4).render();
	
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
    });
});