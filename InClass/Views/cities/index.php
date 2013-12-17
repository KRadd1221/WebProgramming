<?
    include_once '../../inc/_global.php';
	include '../shared/_Layout.php';  
  

?>
<link_href="cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>
<script src="jquery-1.10.2.min.js"></script>
<script src="typeahead.min.js"></script>
<div class= "container">
	<h2>Enter a City</h2>
	<div id="content">
	<form autocomplete="off">
		<p>
			City <label>:</label>
			<input class="typeahead cities form-control" type="text" placeholder="city"  autocomplete="off" spellcheck="false" dir="auto">
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
		$('.cities').typeahead({
		name: 'cities',
		prefetch:'../../inc/cities.json',
		limit: 10
});

	
<?} ?>