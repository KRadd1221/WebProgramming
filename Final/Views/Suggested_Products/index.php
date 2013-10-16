<?php
include_once '../../inc/_global.php';

$model = Suggested_Products::Get();
$view = 'list.php';
include '../Shared/Layout.php';
