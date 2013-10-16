<?php
include_once '../../inc/_global.php';

$model = Inventory::Get();
$view = 'list.php';
include '../Shared/Layout.php';
