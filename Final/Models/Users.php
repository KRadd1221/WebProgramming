<?php

/**
 * 
 */
class Users {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Users WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Users');                        
                }
        }
        static public function Save($row)
		{
			$sql = 	"Insert Into Users (FirstName, LastName, Password, UserType)"
				.	" Values ('$row[FirstName]', '$row[Lastname]', $row[Password]', '$row[UserType]') ";

			$conn = GetConnection();
			$conn -> query($sql);
			echo $conn -> error;
			$conn -> close();
			
			if($error){
				return array('db_error' => $error);
				
			}else{
				return false;
			}
							
		}
        
}