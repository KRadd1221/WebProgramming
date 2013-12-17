<?
    include_once '../../inc/_global.php';
	include '../shared/_Layout.php';  
  

?>

<div class= "container">
	<h2>Enter a City</h2>
	<div id="content">
	<form>
		<p>
			City <label>:</label>
			<input class="typeahead example-cities form-control" type="text" placeholder="City" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
			<!--input type="button" value="Get Value" /-->
		</p>
		<input type="submit" value="Submit" />
	</form>
</div>
</div>
<? function Scripts(){ ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.9.3/typeahead.min.js"></script>
	<script type="text/javascript">
		$('.example-cities .typeahead').typeahead({                                
 		 name: 'City',                                                          
 		 prefetch: 'http://twitter.github.io/typeahead.js/data/countries.json',                                         
 		 limit: 10
 		  		 })

</script>
	
<?}?>