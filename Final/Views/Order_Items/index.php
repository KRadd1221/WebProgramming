<?php
include_once '../../inc/_global.php';

$model = Order_Items::Get();
$view = 'list.php';
include '../Shared/Layout.php';
