<?php


class Inventory 
{        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("        SELECT U.*, K.Name as Category_Name
                                                                  FROM Inventory U
                                                                          Join Product_Categories K ON U.`Category`=K.id
                                                                  WHERE U.id=$id");
                }else{
                        return fetch_all('        SELECT U.*, K.Name as Category_Name
                                                                  FROM Inventory U
                                                                          Join Product_Categories K ON U.`Category`=K.id');
                }
        }
        
        
        static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = Inventory::Encode($row, $conn);
                if($row['id']){
                        $sql =         " UPDATE Inventory "
                                .          " Set Status='$row2[Status]', Name='$row2[Name]', Price='$row2[Price]', Description='$row2[Description]', Picture='$row2[Picture]', Category='$row2[Category]' "
                                .          " WHERE id=$row2[id] ";
                }else{
                        $sql =        " Insert Into Inventory (Status, Name, Price, Description, Picture, Category) "
                                .        " Values ('$row2[Status]', '$row2[Name]', '$row2[Price]', '$row2[Description]', '$row2[Picture]', '$row2[Category]') ";
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
        static public function GetByCategory($CategoryId)
        {
                $sql = " SELECT * FROM Inventory P
                                 Where P.Category = $CategoryId
                ";
                return fetch_all($sql);
        }
       

        static public function GetCategories()
        {
                        $sql = "        SELECT *
                                                FROM Product_Categories
                                        ";
                        return fetch_all($sql);                        
        }
        static public function Delete($id)
        {
                $conn = GetConnection();
                $sql = " DELETE From Inventory WHERE id=$id ";
                
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
        return array('id'=>null, 'Status'=>null, 'Name'=>null, 'Price'=>null, 'Description'=>null, 'Picture'=>null, 'Category'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['Status']) $errors['Status']=" is required";
        if(!$row['Name']) $errors['Name']=" is required";
        if(!$row['Price']) $errors['Price']=" is required";
        if(!$row['Description']) $errors['Description']=" is required";
        if(!$row['Picture']) $errors['Picture']=" is required";
        if(!$row['Category']) $errors['Category']=" is required";
                
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
