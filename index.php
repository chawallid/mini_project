<?php
    // $file="tmp.csv";
    $dataPoints = array();
    $data = array();
    $file = fopen("TH2.csv","r");
    // $d=mktime(11, 14, 54, 8, 12, 2014);
    // echo "Created date is " . date("Y-m-d h:i:sa", $d);
    while(! feof($file))
    {
        $data = fgetcsv($file);
        // date_date_set($date_format,$data[2],$data[1],$data[0]);
      
        $d = mktime( 8, 12, $data[2]);

 
        array_push($dataPoints, array("x" => date("Y-m-d", $d) , "y" => intval($data[4])));
    }
    print_r($dataPoints);
    // fclose($file);
?>

<!-- <!DOCTYPE HTML>
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
</html>       -->

