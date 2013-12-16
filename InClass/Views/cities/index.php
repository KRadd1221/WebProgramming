<?php
include_once '../../inc/_global.php';

$model = cities::Get();
$view = 'list.php';
include '../shared/_Layout.php';
