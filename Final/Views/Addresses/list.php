
<link_href="cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>

<div class= "container">
	<h2>Addresses</h2>
	<table class="table table-hover table-bordered table-striped"> 
		<thead>
		<tr>
			<th>User</th>
			<th>Country</th>
			<th>State</th>
			<th>City</th>
			<th>Zipcode</th>
			<th>Street</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['Users_id']?></td> 
				<td><?=$rs['Country']?></td>
				<td><?=$rs['State']?></td>
				<td><?=$rs['City']?></td>
				<td><?=$rs['Zipcode']?></td>
				<td><?=$rs['Street']?></td>
				<td>
					
				</td>
			</tr>
		<? endforeach ?>
		</tbody>
		
	</table>
</div>
<? function Scripts(){ ?>
	<script src="cdjns.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(".table").dataTable();
	</script>
<?} ?>