<?php

/**
 * 
 */
class Suppliers {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Suppliers  WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Suppliers ');                       
                }
        }
        
        
}