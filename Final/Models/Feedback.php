<?php

class Feedback 
{        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("        SELECT U.*, K.LastName as User_Name
                                                                  FROM Feedback U
                                                                          Join User K ON U.`User`=K.id
                                                                  WHERE U.id=$id
                                                                  
												  ");			  
                }else{
                        return fetch_all('        SELECT U.*, K.LastName as User_Name
                                                                  FROM Feedback U
                                                                          Join User K ON U.`User`=K.id
                                                  ');
                                                                          
                }
        }
        
        
        static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = Feedback::Encode($row, $conn);
                if($row['id']){
                        $sql =         " UPDATE Feedback "
                                .          " Set User'$row2[User]', Description='$row2[Description]' "
                                .          " WHERE id=$row2[id] ";
                }else{
                        $sql =        " Insert Into Feedback (User, Description) "
                                .        " Values ('$row2[User]', '$row2[Description]') ";
                }
                
                $conn->query($sql);
                $error = $conn->error;
                $conn->close();
                
                if($error){
                        return array('db_error' => $error);
                }else{
                        return false;
                }
        }
        
        static public function Delete($id)
        {
                $conn = GetConnection();
                $sql = " DELETE From Feedback WHERE id=$id ";
                
                $conn->query($sql);
                $error = $conn->error;
                $conn->close();
                
                if($error){
                        return array('db_error' => $error);
                }else{
                        return false;
                }
        }
        
        static public function Blank()
    {
        return array('id'=>null, 'User'=>null, 'Description'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['User']) $errors['User']=" is required";
        if(!$row['Description']) $errors['Description']=" is required";
        
        if(count($errors) == 0)
        {
            return false;
        }else
        {
            return $errors;
                        
        }
    }
    
    static function Encode($row, $conn)
    {        
        $row2 = array();
        foreach ($row as $key => $value) {
            $row2[$key] = $conn->real_escape_string($value);
        }
                return $row2;
        }
}