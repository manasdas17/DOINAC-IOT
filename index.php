<?php 


$PAGE_NAME = "DOINAC - Internet of Things";
$HELLO = "INTERNETTTTT";
?>




<!DOCTYPE html>
<html>
<head>
  <!-- Import stylesheets at the top for better user performance -->
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">

  <?php 
  echo "<title>$PAGE_NAME</title>";
  ?>
</head>
<body>

  <?php
    include('top_nav.php');
  ?>





  <div class="jumbotron">
    <div class="container-fluid">
      


    </div>
  </div>

  <div class="container">



    <?php
      include('blank_page.php');
    ?>

  </div>



  <!-- Put the script at the bottom for better performance -->
  <script src="lib/jquery-2.2.2.js" type="text/javascript" charset="utf-8"></script>
  <script src="lib/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>