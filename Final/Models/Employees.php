<?php

/**
 * 
 */
class Keywords {
	
	static function Get()
	{
		$ret= array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Employees');

		while($rs = $result->fetch_assoc()) {
			$ret[] =$rs;
			
		}
		
		$conn-> close();
		return $ret; 
	}
}
