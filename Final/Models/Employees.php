<?php

/**
 * 
 */
class Employees {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Employees WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Employees');                       
                }
        }
        
        
}