<?php
    phpinfo();
?>
<? 	
	$conn = GetConnection();
 	$result = $conn-> query('SELECT * FROM Keywords');
	$rs = $result->fetch_assoc();
?>
