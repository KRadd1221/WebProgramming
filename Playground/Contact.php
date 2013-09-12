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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body>
  	<? 
  	include 'Nav.php';
	 ?>
	 <div class= "container">
      	<div class="well well-lg">
      		<h1>Hello world!</h1>
			<p>Welcome class of 2013 to Web Server Programming <a class="btn btn-default">Learn more</a></p></p>
      	</div>
      	<div class="col-lg-7 col-lg-offset-2"> 
			<h2> Contact Us</h2>
			</br>
    	<div class="input-group">
  			<span class="input-group-addon">Email:</span>
  			<input type="text" class="form-control" placeholder="E-Mail">
		</div>
			</br>
			
		
			<div class="input-group">
  				<span class="input-group-addon">Message</span>
  				<input type="text" class="form-control" placeholder="Message">
			</div>
			</br>
	 		<div class="form-group">
				
				      <input type="submit" class="btn" value="Submit" />
			   
			  </div>  			

	 	</div>
	 </div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
       <script type="text/javascript"> 
    	$(function(){
    		$(".Contact").addClass("active");
    	})
    </script>
  </body>
</html>