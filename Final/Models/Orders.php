<?php

class Orders 
{        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Orders WHERE id=$id");
                }else{
                        return fetch_all('SELECT * FROM Orders');
                }
        }
        
        static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = Orders::Encode($row, $conn);
                if($row['id']){
                        $sql =         " UPDATE Orders "
                                .          " Set User='$row2[User]', OrderNumber='$row2[OrderNumber]' "
                                .          " WHERE id=$row2[id] ";
                }else{
                        $sql =        " Insert Into Orders (User, OrderNumber) "
                                .        " Values ('$row2[Users]', '$row2[OrderNumber]') ";
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
                $sql = " DELETE From Orders WHERE id=$id ";
                
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
        return array('id'=>null, 'User'=>null, 'OrderNumber'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        
        if(!$row['OrderNumber']) $errors['OrderNumber']=" is required";
        if(!$row['User']) $errors['User']=" is required";
        
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