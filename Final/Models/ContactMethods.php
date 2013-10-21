<?php

/**
 * 
 */
class ContactMethods {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM ContactMethods WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM ContactMethods');                       
                }
        }
        
        
}