<?php

/**
 * 
 */
class Keywords {
	
	static function Get()
	{
		$ret= array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Product_Keywords');

		while($rs = $result->fetch_assoc()) {
			$ret[] =$rs;
			
		}
		
		$conn-> close();
		return $ret; 
	}
}
