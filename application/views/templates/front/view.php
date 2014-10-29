
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PRIMAX &middot; ECUADOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url()?>css/boot/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>css/boot/bootstrap-responsive.css" rel="stylesheet">
    <script type="text/javascript" src="<?=base_url()?>js/jquery/plugin/jquery.scrollTo-1.4.3.1-min.js"></script>
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?=base_url()?>assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?=base_url()?>assets/ico/favicon.png">
  </head>

  <body>
  <div class="navbar navbar-inverse navbar-fixed-top">
		      <div class="navbar-inner">
		        <div class="container">
		          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="brand" href="#home">PRIMAX</a>
		          <div class="nav-collapse collapse">
		            <ul class="nav">
		              <li class="active"><a href="#home">Home</a></li>
		              <li><a href="#about">About</a></li>
		              <li><a href="#contact">Contact</a></li>              
		            </ul>            
		          </div><!--/.nav-collapse -->
		        </div>
		      </div>
		    </div>   
    <div class="container">
      <?php 
      	$secciones=array("0"=>"home","1"=>"about","2"=>"contact");
      	for($x=0 ;$x<3;$x++){?>
      		<div id="<?=$secciones[$x]?>" class="row-fluid" style="height:100PX;border:1px solid red;">			
			<div class="span12">
			<?php 
			for($y=0 ;$y<3;$y++){?>
		        <div id="panel-<?=$x?>-<?=$y?>" style="text-align:center;width:100%;height:100%;left:0px;top:0px;border:1px solid blue;position: inherit;">
		        	contenido <?=$x?>-<?=$y?>
		        </div>
	        <?php }?>
	        </div>
	      </div>
      <?php }?>      
      
      <script>
		//alert(screen.height+" - "+screen.width);		
			$('#home').css({"height" : screen.height+"px"});
			$('#about').css({"height" : screen.height+"px"});
			$('#contactt').css({"height" :screen.height+"px"});
		
		
      </script>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/transition.js"></script>
    <script src="<?=base_url()?>assets/js/alert.js"></script>
    <script src="<?=base_url()?>assets/js/modal.js"></script>
    <script src="<?=base_url()?>assets/js/dropdown.js"></script>
    <script src="<?=base_url()?>assets/js/scrollspy.js"></script>
    <script src="<?=base_url()?>assets/js/tab.js"></script>
    <script src="<?=base_url()?>assets/js/tooltip.js"></script>
    <script src="<?=base_url()?>assets/js/popover.js"></script>
    <script src="<?=base_url()?>assets/js/button.js"></script>
    <script src="<?=base_url()?>assets/js/collapse.js"></script>
    <script src="<?=base_url()?>assets/js/carousel.js"></script>
    <script src="<?=base_url()?>assets/js/typeahead.js"></script>

  </body>
</html>
