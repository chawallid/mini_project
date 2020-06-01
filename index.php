<?php
    // $file="tmp.csv";
    $dataPoints = array();
    $data = array();
    $file = fopen("TH2.csv","r");
    $tmp_date = "" ; 
    // $d=mktime(11, 14, 54, 8, 12, 2014);
    // echo "Created date is " . date("Y-m-d h:i:sa", $d);
    while(! feof($file))
    {
        $data = fgetcsv($file);
        $day = $data[0]; 
        $month = $data[1];
        $year =$data[2];
        // $date = $month+" "+$day+" "+$year;
        $tmp_date = $month." ".$day." ".$year ; 
        // echo $tmp_date;

  
        // $date = 'Dec 25 2099';
        // print_r(date('d/m/Y', strtotime($tmp_date)));
        // $date = mktime( 8, 12, $int_years);
 
        array_push($dataPoints, array("x" => new Date('d/m/Y', strtotime($tmp_date)) , "y" => intval($data[4])));

    }
    
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
		xValueFormatString: "DD-MM-YY",
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

