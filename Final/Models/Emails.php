<?php

/**
 * 
 */
class Emails {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Emails WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Emails');                       
                }
        }
        
        
}