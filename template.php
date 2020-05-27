
<?php
    $file="gg.csv";
    $csv= file_get_contents($file);
    $array = array_map("str_getcsv", explode("\n", $csv));
    $json = json_encode($array);
    print_r($json);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ZingSoft Demo</title>

  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <style>
    html,
    body {
      height: 100%;
      width: 100%;
    }

    #myChart {
      height: 100%;
      width: 100%;
      min-height: 150px;
    }

    .zc-ref {
      display: none;
    }
  </style>
</head>

<body>
  <div id='myChart'><a class="zc-ref" href="https://www.zingchart.com/">Powered by ZingChart</a></div>
    <script>

    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
    var myConfig = {
      "type": "line",
      "utc": true,
      "title": {
        "text": "Webpage Analytics",
        "font-size": "24px",
        "adjust-layout": true
      },
      "plotarea": {
        "margin": "dynamic 45 60 dynamic",
      },
      "legend": {
        "layout": "float",
        "background-color": "none",
        "border-width": 0,
        "shadow": 0,
        "align": "center",
        "adjust-layout": true,
        "toggle-action": "remove",
        "item": {
          "padding": 7,
          "marginRight": 17,
          "cursor": "hand"
        }
      },
      "scale-x": {
        "min-value": 1383292800000,
        "shadow": 0,
        "step": 3600000,
        "transform": {
          "type": "date",
          "all": "%D, %d %M<br />%h:%i %A",
          "guide": {
            "visible": false
          },
          "item": {
            "visible": false
          }
        },
        "label": {
          "visible": false
        },
        "minor-ticks": 0
      },
      "scale-y": {
        "line-color": "#f6f7f8",
        "shadow": 0,
        "guide": {
          "line-style": "dashed"
        },
        "label": {
          "text": "Page Views",
        },
        "minor-ticks": 0,
        "thousands-separator": ","
      },
      "crosshair-x": {
        "line-color": "#efefef",
        "plot-label": {
          "border-radius": "5px",
          "border-width": "1px",
          "border-color": "#f6f7f8",
          "padding": "10px",
          "font-weight": "bold"
        },
        "scale-label": {
          "font-color": "#000",
          "background-color": "#f6f7f8",
          "border-radius": "5px"
        }
      },
      "tooltip": {
        "visible": false
      },
      "plot": {
        "highlight": true,
        "tooltip-text": "%t views: %v<br>%k",
        "shadow": 0,
        "line-width": "2px",
        "marker": {
          "type": "circle",
          "size": 3
        },
        "highlight-state": {
          "line-width": 3
        },
        "animation": {
          "effect": 1,
          "sequence": 2,
          "speed": 100,
        }
      },
      "series": [{
          "values": $json, // update value 
          "text": "Pricing",
          "line-color": "#007790",
          "legend-item": {
            "background-color": "#007790",
            "borderRadius": 5,
            "font-color": "white"
          },
          "legend-marker": {
            "visible": false
          },
          "marker": {
            "background-color": "#007790",
            "border-width": 1,
            "shadow": 0,
            "border-color": "#69dbf1"
          },
          "highlight-marker": {
            "size": 6,
            "background-color": "#007790",
          }
        },
        {
          "values": [ 
            714.6,
            656.3,
            660.6,
            729.8,
            731.6,
            682.3,
            654.6,
            673.5,
            700.6,
            755.2,
            817.8,
            809.1,
            815.2,
            836.6,
            897.3,
            896.9,
            866.5,
            835.8,
            797.9,
            784.7,
            802.8,
            749.3,
            722.1,
            688.1,
            730.4,
            661.5,
            609.7,
            630.2,
            633,
            604.2,
            558.1,
            581.4,
            511.5,
            556.5,
            542.1,
            599.7,
            664.8,
            725.3,
            694.2,
            690.5
          ],
          "text": "Documentation",
          "line-color": "#009872",
          "legend-item": {
            "background-color": "#009872",
            "borderRadius": 5,
            "font-color": "white"
          },
          "legend-marker": {
            "visible": false
          },
          "marker": {
            "background-color": "#009872",
            "border-width": 1,
            "shadow": 0,
            "border-color": "#69f2d0"
          },
          "highlight-marker": {
            "size": 6,
            "background-color": "#009872",
          }
        }
      ]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: '100%',
      width: '100%'
    });
  </script>
</body>

</html>