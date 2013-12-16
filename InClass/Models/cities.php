<?php

class Cities {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM US_Zip_Codes WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM  US_Zip_Codes');                       
                }
        }
        
        
}

