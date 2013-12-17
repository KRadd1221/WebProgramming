<?php
include_once __DIR__ . '/../inc/_global.php';



        {	header('Content-Type: application/json');
                
                        echo json_encode (array( fetch_all('SELECT city FROM  US_Zip_Codes')));                      
                }
        
        
        
