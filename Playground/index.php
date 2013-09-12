<!DOCTYPE html>
<html>
  <head>
    <title>Playground</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<style type="text/css">
    	body { padding-top: 65px; }
   	</style>
   	
	 
    <!--HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body>
  	<? 
  	include 'Nav.php';
	 ?>
	 
	 
	 
      <div class="container">
      	<div class="jumbotron">
        <h1>Hello world!</h1>
        <p>Welcome class of 2013 to Web Server Programming</p>
        <p><a class="btn btn-success btn-lg">Learn More </a></p>
      </div>
      <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Important Points</h2>
          <li>The three main links in the navbar work</li>
          <li>They are all centralized in one file</li>
          <li>They change apearance to show you which page you are on.</li>
          <li>These colunms start as three columns then reduce as the browser shrinks<</li>
          <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript"> 
    	$(function(){
    		$(".Home").addClass("active");
    	})
    </script>

  </body>
</html>