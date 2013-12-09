<div class="container">
        <dl class="dl-horizontal">
                <dd><img src="<?=$model['Picture']?>" width="256"></dd>
                <br><br>
                <dt>Price: </dt>
                <dd>$<?=$model['Price']?></dd>
                <dt>Quantity in Stock: </dt>
                <dd><?=$model['Status']?></dd>
                <dt>Category: </dt>
                <dd><?=$model['Name']?></dd>
                <dt>Item Description: </dt>
                <dd><?=$model['Description']?></dd>
        </dl>
</div>