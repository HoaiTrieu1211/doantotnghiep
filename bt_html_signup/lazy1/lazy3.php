<!-- 	Nguyen Hai Duong, September 2016 
 			GNU LESSER GENERAL PUBLIC LICENSE Version 2.1, February 1999
-->

<?php 

include 'function/print-HTML.php';
include 'sql/sql-function.php';

$conn = ConnectDatabse();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bed Room</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap_lazy3.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/index_custom_lazy3.css">
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <script type="text/javascript" src="js/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="js/query.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="lazy-man">
    <!-- Fixed navbar -->
    <div class="container"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<h1>Bed Room</h1>
      <div class="container">
        <div class="navbar-header">
        </div>
      </div>
    </nav>
    <!-- Conainer -->
    <div class="container">

      <div class="row">
        <div class="land-1">
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"><div class="object obj-slider flavor-green"><div class="obj-info"><p class="obj-header">BR Light Bulb 1</p><p class="obj-counter-percent"><i class="fa fa-lightbulb-o"></i><b class="counter">46</b></p></div><div class="obj-timer">
	                <svg class="timer-progress" viewbox="0 0 82 82">
	                  <circle class="progress-bg" r="39" cx="41" cy="41" stroke-dasharray="245"></circle>
	                  <circle class="progress-bar" r="39" cx="41" cy="41" stroke-dasharray="245"></circle>
	                </svg><i class="obj-icon fa fa-lightbulb-o"></i></div><div class="slider-range-min"></div> <div class="clearfix"></div></div></div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"><div class="object obj-button flavor-green"><div class="obj-info"><p class="obj-header">BR Light Bulb 2</p></div><div class="obj-timer">
	                <svg class="timer-progress" viewbox="0 0 82 82">
	                  <circle class="progress-bg" r="39" cx="41" cy="41" stroke-dasharray="245"></circle>
	                  <circle class="progress-bar" r="39" cx="41" cy="41" stroke-dasharray="245"></circle>
	                </svg><i class="obj-icon fa fa-lightbulb-o"></i></div><div class="switch-button"></div> <div class="clearfix"></div></div></div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"><div class="object obj-slider flavor-green"><div class="obj-info"><p class="obj-header">BR Light Bulb 3</p><p class="obj-counter-percent"><i class="fa fa-lightbulb-o"></i><b class="counter">46</b></p></div><div class="obj-timer">
	                <svg class="timer-progress" viewbox="0 0 82 82">
	                  <circle class="progress-bg" r="39" cx="41" cy="41" stroke-dasharray="245"></circle>
	                  <circle class="progress-bar" r="39" cx="41" cy="41" stroke-dasharray="245"></circle>
	                </svg><i class="obj-icon fa fa-lightbulb-o"></i></div><div class="slider-range-min"></div> <div class="clearfix"></div></div></div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"><div class="object obj-button flavor-green"><div class="obj-info"><p class="obj-header">BR Light Bulb 4</p></div><div class="obj-timer">
	                <svg class="timer-progress" viewbox="0 0 82 82">
	                  <circle class="progress-bg" r="39" cx="41" cy="41" stroke-dasharray="245"></circle>
	                  <circle class="progress-bar" r="39" cx="41" cy="41" stroke-dasharray="245"></circle>
	                </svg><i class="obj-icon fa fa-lightbulb-o"></i></div><div class="switch-button"></div> <div class="clearfix"></div></div></div>
              <div class="obj-off"><i class="fa fa-close"></i></div>
              <div class="clearfix"></div>
            </div>
          </div>          <div class="clearfix"></div>  
        </div>
      </div>
    </div>
	  <div class="log-box alert alert-danger" role="alert">
			<strong>Woop !</strong>
			<p class="log-text">test demo alert log</p>
		</div>
  </body>
</html>

