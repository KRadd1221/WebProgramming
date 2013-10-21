<?php

/**
 * 
 */
class Orders {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Orders WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Orders');                       
                }
        }
        
        
}