<?php
include_once '../../inc/_global.php';

$model = Employees::Get();
$view = 'list.php';
include '../Shared/Layout.php';
