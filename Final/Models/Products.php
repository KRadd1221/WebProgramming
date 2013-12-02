<?php

/**
 * 
 */
class Products {
        
        static public function Get()
        {
                return fetch_all('SELECT * FROM Products');
        }
        static public function GetItemsInCategory($CategoryId)
        {
                $sql = " SELECT * FROM Products P
                                 Where P.Product_Category_id = $CategoryId
                ";
                return fetch_all($sql);
        }
        static public function GetCategories()
        {
                $sql = " SELECT * FROM Product_Categories ";
                return fetch_all($sql);
        }
        
        
}