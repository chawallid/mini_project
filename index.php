<?php
    // $file="tmp.csv";
    $dataPoints = array();
    $data = array();
    $file = fopen("TH2.csv","r");
    while(! feof($file))
    {
        $data = fgetcsv($file);
        array_push($dataPoints, array("x" => intval($data[2]) , "y" => intval($data[4])));
    }
    fclose($file);
?>

<!DOCTYPE HTML>
<html>
<head>
<script>    
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Company"
	}, 
    scales: {
        xAxes: [{
          ticks: {
            beginAtZero: false,
            suggestedMin: 2000
          }
        }]
    },
	axisY: {
		title: "temp",
		valueFormatString: "00.0",
		suffix: " C ",
		
	},
    axisX:{
        minimum: 2000,
        maximum: 2100      
    },
	data: [{
		type: "spline",
		markerSize: 5,
		xValueFormatString: "####",
		yValueFormatString: "00.0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
 
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body> 
</html>      

