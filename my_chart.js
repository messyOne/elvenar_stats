Chart.defaults.global = {
	// Boolean - Whether to animate the chart
	animation: true,

	// Number - Number of animation steps
	animationSteps: 60,

	// String - Animation easing effect
	// Possible effects are:
	// [easeInOutQuart, linear, easeOutBounce, easeInBack, easeInOutQuad,
	//  easeOutQuart, easeOutQuad, easeInOutBounce, easeOutSine, easeInOutCubic,
	//  easeInExpo, easeInOutBack, easeInCirc, easeInOutElastic, easeOutBack,
	//  easeInQuad, easeInOutExpo, easeInQuart, easeOutQuint, easeInOutCirc,
	//  easeInSine, easeOutExpo, easeOutCirc, easeOutCubic, easeInQuint,
	//  easeInElastic, easeInOutSine, easeInOutQuint, easeInBounce,
	//  easeOutElastic, easeInCubic]
	animationEasing: "easeOutQuart",

	// Boolean - If we should show the scale at all
	showScale: true,

	// Boolean - If we want to override with a hard coded scale
	scaleOverride: false,

	// ** Required if scaleOverride is true **
	// Number - The number of steps in a hard coded scale
	scaleSteps: null,
	// Number - The value jump in the hard coded scale
	scaleStepWidth: null,
	// Number - The scale starting value
	scaleStartValue: null,

	// String - Colour of the scale line
	scaleLineColor: "rgba(0,0,0,.1)",

	// Number - Pixel width of the scale line
	scaleLineWidth: 1,

	// Boolean - Whether to show labels on the scale
	scaleShowLabels: true,

	// Interpolated JS string - can access value
	scaleLabel: "<%=value%>",

	// Boolean - Whether the scale should stick to integers, not floats even if drawing space is there
	scaleIntegersOnly: true,

	// Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
	scaleBeginAtZero: false,

	// String - Scale label font declaration for the scale label
	scaleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

	// Number - Scale label font size in pixels
	scaleFontSize: 12,

	// String - Scale label font weight style
	scaleFontStyle: "normal",

	// String - Scale label font colour
	scaleFontColor: "#666",

	// Boolean - whether or not the chart should be responsive and resize when the browser does.
	responsive: false,

	// Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
	maintainAspectRatio: true,

	// Boolean - Determines whether to draw tooltips on the canvas or not
	showTooltips: true,

	// Function - Determines whether to execute the customTooltips function instead of drawing the built in tooltips (See [Advanced - External Tooltips](#advanced-usage-custom-tooltips))
	customTooltips: false,

	// Array - Array of string names to attach tooltip events
	tooltipEvents: ["mousemove", "touchstart", "touchmove"],

	// String - Tooltip background colour
	tooltipFillColor: "rgba(0,0,0,0.8)",

	// String - Tooltip label font declaration for the scale label
	tooltipFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

	// Number - Tooltip label font size in pixels
	tooltipFontSize: 14,

	// String - Tooltip font weight style
	tooltipFontStyle: "normal",

	// String - Tooltip label font colour
	tooltipFontColor: "#fff",

	// String - Tooltip title font declaration for the scale label
	tooltipTitleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

	// Number - Tooltip title font size in pixels
	tooltipTitleFontSize: 14,

	// String - Tooltip title font weight style
	tooltipTitleFontStyle: "bold",

	// String - Tooltip title font colour
	tooltipTitleFontColor: "#fff",

	// Number - pixel width of padding around tooltip text
	tooltipYPadding: 6,

	// Number - pixel width of padding around tooltip text
	tooltipXPadding: 6,

	// Number - Size of the caret on the tooltip
	tooltipCaretSize: 8,

	// Number - Pixel radius of the tooltip border
	tooltipCornerRadius: 6,

	// Number - Pixel offset from point x to tooltip edge
	tooltipXOffset: 10,

	// String - Template string for single tooltips
	tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",

	// String - Template string for multiple tooltips
	multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>",

	// Function - Will fire on animation progression.
	onAnimationProgress: function(){},

	// Function - Will fire on animation completion.
	onAnimationComplete: function(){}
};

// Get the context of the canvas element we want to select
var ctx = document.getElementById("myChart").getContext("2d");

var data = {
	datasets: [
		{
			label: "messy",
			fillColor: "rgba(220,220,220,0.2)",
			strokeColor: "rgba(220,220,220,1)",
			pointColor: "rgba(220,220,220,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(220,220,220,1)",
			dataPoints: [
			        { x: new Date(2016, 02, 19), y: 4759},
			        { x: new Date(2016, 02, 22), y: 4991},
			        { x: new Date(2016, 02, 23), y: 5011},
			        { x: new Date(2016, 02, 24), y: 5042},
			        { x: new Date(2016, 02, 25), y: 5098},
			        { x: new Date(2016, 02, 26), y: 5296},
			        { x: new Date(2016, 02, 27), y: 5378},
			        { x: new Date(2016, 02, 29), y: 5503},
			        { x: new Date(2016, 03, 01), y: 5712},
			        { x: new Date(2016, 03, 02), y: 5850},
			        { x: new Date(2016, 03, 07), y: 6583},
			        { x: new Date(2016, 03, 08), y: 6735},
			        { x: new Date(2016, 03, 09), y: 7105},
			        { x: new Date(2016, 03, 10), y: 7220},
			        { x: new Date(2016, 03, 14), y: 7712},
			        { x: new Date(2016, 03, 16), y: 7958}
			]
		},
		{
			label: "firegate666",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			dataPoints: [
			        { x: new Date(2016, 02, 19), y: 2706},
			        { x: new Date(2016, 02, 22), y: 3143},
			        { x: new Date(2016, 02, 23), y: 3219},
			        { x: new Date(2016, 02, 24), y: 3399},
			        { x: new Date(2016, 02, 25), y: 3411},
			        { x: new Date(2016, 02, 26), y: 3446},
			        { x: new Date(2016, 02, 27), y: 3641},
			        { x: new Date(2016, 02, 29), y: 3699},
			        { x: new Date(2016, 03, 01), y: 4014},
			        { x: new Date(2016, 03, 02), y: 4056},
			        { x: new Date(2016, 03, 07), y: 4606},
			        { x: new Date(2016, 03, 08), y: 4606},
			        { x: new Date(2016, 03, 09), y: 5138},
			        { x: new Date(2016, 03, 10), y: 5331},
			        { x: new Date(2016, 03, 14), y: 5420},
			        { x: new Date(2016, 03, 16), y: 5462}
			]
		},
		{
			label: "lensboy",
			fillColor: "rgba(151,34,205,0.2)",
			strokeColor: "rgba(151,34,205,1)",
			pointColor: "rgba(151,34,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			dataPoints: [
			        { x: new Date(2016, 02, 19), y: 1642},
			        { x: new Date(2016, 02, 22), y: 1985},
			        { x: new Date(2016, 02, 23), y: 2173},
			        { x: new Date(2016, 02, 24), y: 2420},
			        { x: new Date(2016, 02, 25), y: 2538},
			        { x: new Date(2016, 02, 26), y: 2622},
			        { x: new Date(2016, 02, 27), y: 2632},
			        { x: new Date(2016, 02, 29), y: 2872},
			        { x: new Date(2016, 03, 01), y: 3057},
			        { x: new Date(2016, 03, 02), y: 3153},
			        { x: new Date(2016, 03, 07), y: 3997},
			        { x: new Date(2016, 03, 08), y: 4139},
			        { x: new Date(2016, 03, 09), y: 4277},
			        { x: new Date(2016, 03, 10), y: 4318},
			        { x: new Date(2016, 03, 14), y: 5081},
			        { x: new Date(2016, 03, 16), y: 5313}
			]
		},
		{
			label: "adler94",
			fillColor: "rgba(151,187,22,0.2)",
			strokeColor: "rgba(151,187,22,1)",
			pointColor: "rgba(151,187,22,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			dataPoints: [
			        { x: new Date(2016, 02, 19), y: 58},
			        { x: new Date(2016, 02, 22), y: 108},
			        { x: new Date(2016, 02, 23), y: 202},
			        { x: new Date(2016, 02, 24), y: 211},
			        { x: new Date(2016, 02, 25), y: 211},
			        { x: new Date(2016, 02, 26), y: 217},
			        { x: new Date(2016, 02, 27), y: 373},
			        { x: new Date(2016, 02, 29), y: 504},
			        { x: new Date(2016, 03, 01), y: 565},
			        { x: new Date(2016, 03, 02), y: 606},
			        { x: new Date(2016, 03, 07), y: 952},
			        { x: new Date(2016, 03, 08), y: 954},
			        { x: new Date(2016, 03, 09), y: 1134},
			        { x: new Date(2016, 03, 10), y: 1276},
			        { x: new Date(2016, 03, 14), y: 1475},
			        { x: new Date(2016, 03, 16), y: 1531}
			]
		}
	]
};

var options = {
	///Boolean - Whether grid lines are shown across the chart
	scaleShowGridLines : true,

	//String - Colour of the grid lines
	scaleGridLineColor : "rgba(0,0,0,.05)",

	//Number - Width of the grid lines
	scaleGridLineWidth : 1,

	//Boolean - Whether to show horizontal lines (except X axis)
	scaleShowHorizontalLines: true,

	//Boolean - Whether to show vertical lines (except Y axis)
	scaleShowVerticalLines: true,

	//Boolean - Whether the line is curved between points
	bezierCurve : true,

	//Number - Tension of the bezier curve between points
	bezierCurveTension : 0.4,

	//Boolean - Whether to show a dot for each point
	pointDot : true,

	//Number - Radius of each point dot in pixels
	pointDotRadius : 4,

	//Number - Pixel width of point dot stroke
	pointDotStrokeWidth : 1,

	//Number - amount extra to add to the radius to cater for hit detection outside the drawn point
	pointHitDetectionRadius : 20,

	//Boolean - Whether to show a stroke for datasets
	datasetStroke : true,

	//Number - Pixel width of dataset stroke
	datasetStrokeWidth : 2,

	//Boolean - Whether to fill the dataset with a colour
	datasetFill : true,

	//String - A legend template
	legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

};

var myLineChart = new Chart(ctx).Line(data, options);
