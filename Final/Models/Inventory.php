<?php

/**
 * 
 */
class Inventory {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Inventory WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Inventory');                       
                }
        }
        
        
}