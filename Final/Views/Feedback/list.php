<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
        
        <h2>Feedback</h2>
        
        <a href="?action=new">Add Feedback</a>
        
        <table class="table table-hover table-bordered table-striped">
                <thead>
                <tr>
                        <th>User</th>
                        <th>Description</th>
                        <th></th>
                </tr>
                </thead>
                <tbody>
                <? foreach ($model as $rs): ?>
                        <tr>
                        		<td><?=$rs['User']?></td>
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