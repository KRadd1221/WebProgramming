<?php

/**
 * 
 */
class Order_Items {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM Order_Items WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM Order_Items');                       
                }
        }
        
        
}