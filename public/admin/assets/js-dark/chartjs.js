$(function() {
	'use strict';
	var ctx = document.getElementById("linechart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep" , "Oct", "Nov", "Dec"],
			datasets: [{
				label: 'Monthly Growth',
				data: [150, 250, 180, 350, 520, 260, 480, 570, 390, 450, 680, 720],
				borderWidth: 2,
				backgroundColor: 'transparent',
				borderColor: 'rgb(134,69,255)',
				borderWidth: 4,
				pointBackgroundColor: '#ffffff',
				pointRadius: 8
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display:true,
				labels: {
                    fontColor: "#bbc1ca",
                }
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: "#bbc1ca",
					},
					gridLines: {
						color: 'rgba(161, 161, 161,0.3)'
					}
				}],

				xAxes: [{
					ticks: {
						display: true,
						fontColor: "#bbc1ca",
					},
					gridLines: {
						display: false,
						color: 'rgba(161, 161, 161,0.3)'
					}
				}]
			},
		}
	});
	var ctx = document.getElementById("barchart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018"],
			datasets: [{
				label: 'Yearly Profits',
				data: [290, 450, 320, 330, 560, 620, 740, 480],
				borderWidth: 2,
				backgroundColor: 'rgb(134,69,255)',
				borderColor: 'rgb(134,69,255)',
				borderWidth: 2.0,
				pointBackgroundColor: '#ffffff',
				pointRadius: 4
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display:true,
				labels: {
                    fontColor: "#bbc1ca",
                }
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: "#bbc1ca",
					},
					gridLines: {
						color: 'rgba(161, 161, 161,0.3)'
					}
				}],

				xAxes: [{
					ticks: {
						display: true,
						fontColor: "#bbc1ca",
					},
					gridLines: {
						display: false,
						color: 'rgba(161, 161, 161,0.3)'
					}
				}]
			},
		}
	});
	var ctx = document.getElementById("doughchart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [
					60,
					20,
					30,
					50,
				],
				backgroundColor: ['#ff8645', '#8645ff', '#45beff', '#45ff86'],
				label: 'Dataset 1'
			}],
			labels: ['Youtube', 'Tiwtter', 'Google+', 'Facebook'],
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display:true,
				labels: {
                    fontColor: "#bbc1ca",
                }
			},
		}
	});
	var ctx = document.getElementById("piechart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			datasets: [{
				data: [
					70,
					60,
					50,
					30,
				],
				backgroundColor: ['#ff8645', '#8645ff', '#45beff', '#45ff86'],
				label: 'Dataset 1'
			}],
			labels: ['Sales', 'Profits', 'Growth', 'Income'],
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display:true,
				labels: {
                    fontColor: "#bbc1ca",
                }
			},
		}
	});
});