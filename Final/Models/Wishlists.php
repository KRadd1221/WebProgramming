<?php

/**
 * 
 */
class Wishlists {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Wishlists  WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Wishlists ');                       
                }
        }
        
        
}