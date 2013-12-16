
<link_href="cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>

<div class= "container">
	<h2>Enter a City</h2>
	<div id="content">
	<form autocomplete="off">
		<p>
			City <label>:</label>
			<input type="text" class= "form-control" name="cities" id="cities" />
			<!--input type="button" value="Get Value" /-->
		</p>
		<input type="submit" value="Submit" />
	</form>
</div>
</div>
<? function Scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.9.3/typeahead.min.js"></script>
	<script type="text/javascript">
		$('.example-cities .typeahead').typeahead({
		name: 'cities',
		prefetch: 'cities::Get()',
		limit: 10
});

	</script>
<?} ?>