<?php
include_once '../../inc/_global.php';

$model = Suppliers::Get();
$view = 'list.php';
include '../Shared/Layout.php';
