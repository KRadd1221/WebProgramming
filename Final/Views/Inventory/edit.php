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
                
                <div class="form-group <?=isset($errors['Status']) ? 'has error' : '' ?>">
                        <label for="Status" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-10">
                                <input type="text" name="Status" id="Status" placeholder="Status" class="form-control" value="<?=$model['Status']?>"/>
                                <? if(isset($errors['Status'])): ?><span class = "error"><?=$errors['Status'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Name']) ? 'has error' : '' ?>">
                        <label for="Name" class="col-sm-2 control-label">Product</label>
                        <div class="col-sm-10">
                                <input type="text" name="Name" id="Name" placeholder="Product" class="form-control" value="<?=$model['Name']?>"/>
                                <? if(isset($errors['Name'])): ?><span class = "error"><?=$errors['Name'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Price']) ? 'has error' : '' ?>">
                        <label for="Price" class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-10">
                                <input type="text" name="Price" id="Price" placeholder="Price" class="form-control" value="<?=$model['Price']?>"/>
                                <? if(isset($errors['Price'])): ?><span class = "error"><?=$errors['Price'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Description']) ? 'has error' : '' ?>">
                        <label for="Description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                                <input type="text" name="Description" id="Description" placeholder="Description" class="form-control" value="<?=$model['Description']?>"/>
                                <? if(isset($errors['Description'])): ?><span class = "error"><?=$errors['Description'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Picture']) ? 'has error' : '' ?>">
                        <label for="Picture" class="col-sm-2 control-label">Picture</label>
                        <div class="col-sm-10">
                                <input type="text" name="Picture" id="Picture" placeholder="Picture" class="form-control" value="<?=$model['Picture']?>"/>
                                <? if(isset($errors['Picture'])): ?><span class = "error"><?=$errors['Picture'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Category']) ? 'has error' : '' ?>">
                        <label for="Category" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-10">
                                <select name="Category" id="Category" class="form-control" >
                                        <? foreach(Product_Categories::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['Name']?></option>
                                        <? endforeach; ?>
                                </select>
                                <? if(isset($errors['Product_Categories_id'])): ?><span class = "error"><?=$errors['Product_Categories_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save"/>
                        </div>
                </div>
        </form>
</div>