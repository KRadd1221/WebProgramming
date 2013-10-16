<?php
include_once '../../inc/_global.php';

$model = Emails::Get();
$view = 'list.php';
include '../Shared/Layout.php';
