<?php

/**
 * 
 */
class Keywords {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Keywords WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Keywords');                       
                }
        }
        
        
}