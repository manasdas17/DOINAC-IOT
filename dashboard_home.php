<?php 

  require_once 'scripts/functions.php';

  if (!isset($_SESSION)) {
    session_start();
  }

  $isLogged = false;
  if (isset($_SESSION['loggedin'])) {
    $isLogged = $_SESSION['loggedin'];
  }

  if (!$isLogged) {
    header("Location: index.php");
    exit();
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

  <!-- top navigation bar -->
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom:0px">
    <div class="container-fluid">
    <div class="navbar-header">    
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
      data-target="#top-navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Internet of Things</a>
    </div>
       <!-- Top Menu Items -->  <!-- A list with 3 elements pretty easy stuff-->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
          <!-- Create a dropdown with envelope icon -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a> 
          <!-- Contains a list of 'media' elements for messages 
             and a footer for read all messages -->
          <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>BlaBlaBla</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer"> 
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"> <!-- For notifications dropdown -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"> <!-- for account -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                        <?php 
                          echo $_SESSION['login-first-name'] . " " . $_SESSION['login-last-name'];
                        ?>
                     <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="" data-toggle="modal" data-target="#logout-modal"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
    

    <div class="collapse navbar-collapse" id="top-navbar-collapse">
      <ul class="nav navbar-nav side-nav">          <!-- put a navigation side bar with a list of icons and text -->
        <li class="active">
            <a href=""><i class="fa fa-fw fa-home"></i>Home</a> <!-- fw stands for fixed width -->
        </li>
        <li>
            <a href=""><i class="fa fa-fw fa-heart"></i>Things</a>  <!-- just a link with links to other pages -->
        </li>
        <li>
            <a href=""><i class="fa fa-fw fa-cloud-upload"></i>Monitor</a>
        </li>
        <li>
            <a href=""><i class="fa fa-fw fa-bar-chart"></i>Statistics</a>
        </li>
        <li>
            <a href=""><i class="fa fa-fw fa-envelope"></i>Mailbox<span class="badge pull-right">44</span></a>
        </li>
        <li>
            <a href=""><i class="fa fa-fw fa-bell"></i>Notifications</a>
        </li>
        <li>
            <a href=""><i class="fa fa-fw fa-cog"></i>Settings</a>
        </li>
        <li>
          <a href="" data-toggle="modal" data-target="#logout-modal"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
        </li>
      </ul>
    </div>
  </div><!--/.container-fluid -->
</nav>


  <div class="container">
    <h1>Here is my page</h1>
    
    
    <div id="container" style="width:600px; height:600px;">
    
    </div>
    
    
    
    
  </div>
  
  






  <!-- Modal -->
  <div class="modal fade bs-modal-sm" id="logout-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <h3><center>Are you sure?<center></h3>
          <br>
          <form class="form-horizontal" method="POST" action="scripts/logout.php" role="form">
            <fieldset>
              <!-- Button -->
              <div class="control-group">
                <label class="control-label" for="signin"></label>
                <div class="controls">
                  <center>
                    <button id="signin" name="signin" class="btn btn-md btn-info">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  </center>
                </div>
              </div>
            </fieldset>
          </form>
      </div>
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

