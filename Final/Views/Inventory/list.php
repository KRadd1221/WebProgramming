<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
        
        <h2>Inventory</h2>
        
        <a href="?action=new">Add Product</a>
        
        <table class="table table-hover table-bordered table-striped">
                <thead>
                <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th></th>
                </tr>
                </thead>
                <tbody>
                <? foreach ($model as $rs): ?>
                        <tr>
                                <td><?=$rs['id']?></td> 
                                <td><?=$rs['Status']?></td>
                                <td><?=$rs['Name']?></td>
                                <td><?=$rs['Price']?></td>
                                <td><?=$rs['Category']?></td>
                                <td><?=$rs['Description']?></td>
                                <td>
                                        <a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
                                        <a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
                                        <a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
                                </td>
                        </tr>
                <? endforeach ?>
                </tbody>
        </table>
</div>

<div id="myModal" class="modal slide"></div>

<? function Scripts(){ ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
                $(".table").dataTable();
        </script>
<? } ?>