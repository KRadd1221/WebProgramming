
<link_href="cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>

<div class= "container">
	<h2>Inventory</h2>
	<table class="table table-hover table-bordered table-striped"> 
		<thead>
		<tr>
			<th>In Stock</th>
			<th>Out of Stock</th>
			<th>Coming Soon</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['In_Stock']?></td> 
				<td><?=$rs['Out_of_Stock']?></td>
				<td><?=$rs['Coming_Soon']?></td>
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