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
                <input type="hidden" name="id" value="<?=$model['id']?>"/>
                
                
                                
                <div class="form-group <?=isset($errors['Street']) ? 'has error' : '' ?>">
                        <label for="Street" class="col-sm-2 control-label">Street</label>
                        <div class="col-sm-10">
                                <input type="text" name="Street" id="Street" placeholder="Street" class="form-control" value="<?=$model['Street']?>"/>
                                <? if(isset($errors['Street'])): ?><span class = "error"><?=$errors['Street'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['City']) ? 'has error' : '' ?>">
                        <label for="City" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                                <input type="text" name="City" id="City" placeholder="City" class="form-control" value="<?=$model['City']?>"/>
                                <? if(isset($errors['City'])): ?><span class = "error"><?=$errors['City'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['State']) ? 'has error' : '' ?>">
                        <label for="State" class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                                <input type="text" name="State" id="State" placeholder="State" class="form-control" value="<?=$model['State']?>"/>
                                <? if(isset($errors['State'])): ?><span class = "error"><?=$errors['State'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Country']) ? 'has error' : '' ?>">
                        <label for="Country" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                                <input type="text" name="Country" id="Country" placeholder="Country" class="form-control" value="<?=$model['Country']?>"/>
                                <? if(isset($errors['Country'])): ?><span class = "error"><?=$errors['Country'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Zipcode']) ? 'has error' : '' ?>">
                        <label for="Zipcode" class="col-sm-2 control-label">Zipcode</label>
                        <div class="col-sm-10">
                                <input type="text" name="Zipcode" id="Zipcode" placeholder="Zipcode" class="form-control" value="<?=$model['Zipcode']?>"/>
                                <? if(isset($errors['Zipcode'])): ?><span class = "error"><?=$errors['Zipcode'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save"/>
                        </div>
                </div>
        </form>
</div>