<?php
include_once '../../inc/_global.php';

$model = Orders::Get();
$view = 'list.php';
include '../Shared/Layout.php';
