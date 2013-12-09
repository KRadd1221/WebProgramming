<?php

class Addresses 
{        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Addresses WHERE id=$id");
                }else{
                        return fetch_all('SELECT * FROM Addresses');
                }
        }
        
        static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = Addresses::Encode($row, $conn);
                if($row['id']){
                        $sql =         " UPDATE Addresses "
                                .          " Street='$row2[Street]', City='$row2[City]', State='$row2[State]', Country='$row2[Country]', ZIP='$row2[Zipcode]'"
                                .          " WHERE id=$row2[id] ";
                }else{
                        $sql =        " Insert Into Addresses ( Street, City, State, Country, Zipcode) "
                                .        " Values ('$row2[Street]', '$row2[City]', '$row2[State]', '$row2[Country]', '$row2[Zipcode]')";
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
                $sql = " DELETE From Addresses WHERE id=$id ";
                
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
        return array('id'=>null,  'Street'=>null,  'Zipcode'=>null, 'Country'=>null, 'City'=>null, 'State'=>null,);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['State']) $errors['State']=" is required";
        if(!$row['Street']) $errors['Street']=" is required";
        if(!$row['Country']) $errors['Country']=" is required";
        if(!$row['City']) $errors['City']=" is required";
        if(!$row['Zipcode']) $errors['Zipcode']=" is required";
        
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