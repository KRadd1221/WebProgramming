<?php

/**
 * 
 */
class Product_Categories {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Product_Categories  WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Product_Categories ');                       
                }
        }
        
        
}