<?php 
    require_once 'scripts/functions.php';
    check_logged_and_redirect();
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
    $PAGE_NAME = "MONITOR";
    include 'dashboard_nav.php';
    include 'under_construction.php';
?>


<script src="lib/jquery-2.2.2.js" type="text/javascript" charset="utf-8"></script>
<script src="lib/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>


</body>
</html>

