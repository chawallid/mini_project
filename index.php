<?php
    // $file="tmp.csv";
    $dataPoints = array();
    $data = array();
    $file = fopen("TH2.csv","r");
    while(! feof($file))
    {
        $data = fgetcsv($file);
        $endDate = array(
            'month' => $data[1],
            'day' => $data[0],
            'year' => $data[2],    
        );
        $date = DateTime::createFromFormat('d/m/Y', vsprintf('%s/%s/%s', [
            $endDate['day'],
            $endDate['month'],
            $endDate['year'],
        ]));
        
        echo $date->format('d/m/Y');
        // // date_date_set($date_format,$data[2],$data[1],$data[0]);
        // // $tmp = date_format($date_format,"Y/m/d");
        // $year = (string)$data[2];
        // $month = (string)$data[1];

        // print_r($year+"-"+$month);
        // array_push($dataPoints, array("x" => new Date($data[2],$data[1],$data[0]) , "y" => intval($data[4])));
    }
    // print_r($dataPoints);
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

