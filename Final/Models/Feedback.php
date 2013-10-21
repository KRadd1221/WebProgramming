<?php

/**
 * 
 */
class Feedback {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Feedback WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Feedback');                       
                }
        }
        
        
}