<style type = "text/css">
    .error{color:red;}
</style>

<div class="container">

        <? if(isset($errors) && $errors): ?>
        <ul class="error">
        <? foreach ($errors as $key => $value): ?>
            <li>
                <label><?=$key?>:</label><?=$value?>
            </li>
        <? endforeach; ?>
        </ul>
    <? endif; ?>

        <form action="?action=save" method="post" class="form-horizontal row">
                <input type="hidden" id="id" value="<?=$model['id']?>"/>
                
                <div class="form-group <?=isset($errors['User']) ? 'has error' : '' ?>">
                        <label for="User" class="col-sm-2 control-label">User ID</label>
                        <div class="col-sm-10">
                                <input type="text" id="User" id="User" placeholder="User ID" class="form-control" value="<?=$model['User']?>"/>
                                <? if(isset($errors['User'])): ?><span class = "error"><?=$errors['User'] ?> </span> <? endif;?>
                        </div>
                </div>
                
                <div class="form-group <?=isset($errors['OrderNumber']) ? 'has error' : '' ?>">
                        <label for="OrderNumber" class="col-sm-2 control-label">Order Number</label>
                        <div class="col-sm-10">
                                <input type="text" id="OrderNumber" id="OrderNumber" placeholder="Order Number" class="form-control" value="<?=$model['OrderNumber']?>"/>
                                <? if(isset($errors['OrderNumber'])): ?><span class = "error"><?=$errors['OrderNumber'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save"/>
                        </div>
                </div>
        </form>
</div>