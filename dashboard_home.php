<?php 

    require_once 'scripts/functions.php';

    start_session_if_not_started();

    $loggedin = isset_or_empty($_SESSION['loggedin']);


    if (!$loggedin) {
        /* If user is not logged in then redirect to home page */
        redirect_and_exit("index.php");
    }

 ?>

<!DOCTYPE>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <title>Dashboard Page</title>
</head>

<body>

<?php 
    /* Common navigation for all dashboard pages */
    include 'dashboard_nav.php';
?>


  <div class="container">
    <h1>Here is my page</h1>
    
    <div id="container" style="width:600px; height:600px;">
    
    </div>
    
  </div>
  


<script src="lib/jquery-2.2.2.js" type="text/javascript" charset="utf-8"></script>
<script src="lib/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>


  <script>
    var chart;
    var t = 0;
  
    $(document).ready(function() {
      chart = new Highcharts.Chart({
        chart: {
          renderTo: 'container',
          defaultSeriesType: 'spline',

        },
        title: {
          text: 'Live random data'
        },
        xAxis: {
          type: 'datetime',
          tickPixelInterval: 150,
          maxZoom: 20 * 1000
        },
        yAxis: {
          minPadding: 0.2,
          maxPadding: 0.2,
          title: {
            text: 'Value',
            margin: 80
          }
        },
        series: [{
          name: 'Random data',
          data: []
        }]
      });        
    });
    

    
    setInterval(function(){
    
      var series = chart.series[0];
      shift = series.data.length > 1000; // shift if the series is 
      
      console.log("Hello");
                                                 // longer than 20
      t = t + 1;
            point = [t*100000, Math.sin(t)*100];
            chart.series[0].addPoint(point, true, shift);
      
    }, 100);

  </script>


</body>
</html>

