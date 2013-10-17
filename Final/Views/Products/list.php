
<link_href="cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>

<div class= "container">
	<h2>Products</h2>
	<table class="table table-hover table-bordered table-striped"> 
		<thead>
		<tr>
			<th>Product Name</th>
			<th>Supplier</th>
			<th>Product Category</th>
			<th>Product ID</th>
			<th>Inventory ID</th>
			<th>Description</th>
			<th>Price</th>
			<th>Product Keywords</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['Name']?></td> 
				<td><?=$rs['Suppliers_id']?></td>
				<td><?=$rs['Product_Categories_id']?></td>
				<td><?=$rs['Product_id_id']?></td>
				<td><?=$rs['Inventory_id']?></td>
				<td><?=$rs['Description']?></td>
				<td><?=$rs['Price']?></td>
				<td><?=$rs['Product_Keywords_id']?></td>
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