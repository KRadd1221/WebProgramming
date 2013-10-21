<?php

/**
 * 
 */
class Addresses {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Addresses WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Addresses');                       
                }
        }
        
        
}