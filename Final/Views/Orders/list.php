
<link_href="cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>

<div class= "container">
	<h2>Orders</h2>
	<table class="table table-hover table-bordered table-striped"> 
		<thead>
		<tr>
			<th>Order Number</th>
			<th>User</th>
			
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['OrderNumber']?></td> 
				<td><?=$rs['Users_id']?></td>
				
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