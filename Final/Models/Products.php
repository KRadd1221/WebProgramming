<?php

/**
 * 
 */
class Products {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Products  WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Products ');                       
                }
        }
        
        
}