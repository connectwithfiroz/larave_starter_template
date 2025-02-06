$(function(e){
  'use strict';
  
	var g1, g2, g3, g4, g5, g6;

    window.onload = function(){

		var g1 = new JustGage({
			id: "g1",
			value: getRandomInt(0, 100),
			min: 0,
			max: 100,
			title: "Custom Width",
			label: "",
			gaugeColor: "#f7f7fa",
			levelColors: ["#3ebaef"],
			gaugeWidthScale: 0.2
		});

		var g2 = new JustGage({
			id: "g2",
			value: getRandomInt(0, 100),
			min: 0,
			max: 100,
			title: "Custom Shadow",
			label: "",
			gaugeColor: "#f7f7fa",
			levelColors: ["#8645ff"],
			shadowOpacity: 0.3,
			shadowSize: 0,
			shadowVerticalOffset: 0

		});

		var g3 = new JustGage({
			id: "g3",
			value: getRandomInt(0, 100),
			min: 0,
			max: 100,
			title: "Custom Colors",
			label: "",
			gaugeColor: "#f7f7fa",
			levelColors: [
				"#31c92e",
				"#8645ff",
				"#ea5d33"
			]

		});

		var g4 = new JustGage({
			id: "g4",
			value: getRandomInt(0, 100),
			min: 0,
			max: 100,
			title: "Hide Labels",
			gaugeColor: "#f7f7fa",
			levelColors: ["#00e682"],
			showMinMax: false

		});

		var g5 = new JustGage({
			id: "g5",
			value: getRandomInt(0, 100),
			min: 0,
			max: 100,
			title: "Animation Type",
			label: "",
			startAnimationTime: 2000,
			startAnimationType: ">",
			refreshAnimationTime: 1000,
			gaugeColor: "#f7f7fa",
			levelColors: ["#ffa22b"],
			refreshAnimationType: "bounce"

		});

		var g6 = new JustGage({

			id: "g6",
			value: getRandomInt(0, 100),
			min: 0,
			max: 100,
			title: "Minimal",
			label: "",
			showMinMax: false,
			gaugeColor: "#f7f7fa",
			levelColors: ["#21cb95"],
			showInnerShadow: false,
			startAnimationTime: 1,
			startAnimationType: "linear",
			refreshAnimationTime: 1,
			refreshAnimationType: "linear"
		});

		setInterval(function() {

          g1.refresh(getRandomInt(0, 100));
		  g2.refresh(getRandomInt(0, 100));
		  g3.refresh(getRandomInt(0, 100));
		  g4.refresh(getRandomInt(0, 100));
		  g5.refresh(getRandomInt(0, 100));
		  g6.refresh(getRandomInt(0, 100));

        }, 2500);

    };
});