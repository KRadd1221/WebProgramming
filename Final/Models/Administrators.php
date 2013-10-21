<?php

/**
 * 
 */
class Administrators {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Administrators WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Administrators');                       
                }
        }
        
        
}