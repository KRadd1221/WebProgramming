
<link_href="cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>

<div class= "container">
	<h2>Suggested Products</h2>
	<table class="table table-hover table-bordered table-striped"> 
		<thead>
		<tr>
			<th>KeyWords id</th>
			<th>Category id</th>
			<th>Product Keyword id</th>
			<th>Product id</th>
			<th>Product</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['Keywords_id']?></td> 
				<td><?=$rs['Product_Categories_id']?></td>
				<td><?=$rs['Product_Keywords_id']?></td>
				<td><?=$rs['Product_id_id']?></td>
				<td><?=$rs['Products_id']?></td>
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