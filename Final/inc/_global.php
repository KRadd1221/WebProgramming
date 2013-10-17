<?php 
include_once('_password.php');
include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';
include_once __DIR__ . '/../Models/Addresses.php';
include_once __DIR__ . '/../Models/Administrators.php';
include_once __DIR__ . '/../Models/ContactMethods.php';
include_once __DIR__ . '/../Models/Emails.php';
include_once __DIR__ . '/../Models/Employees.php';
include_once __DIR__ . '/../Models/Feedback.php';
include_once __DIR__ . '/../Models/Inventory.php';
include_once __DIR__ . '/../Models/Order_Items.php';
include_once __DIR__ . '/../Models/Orders.php';
include_once __DIR__ . '/../Models/Product_Categories.php';
include_once __DIR__ . '/../Models/Product_id.php';
include_once __DIR__ . '/../Models/Product_Keywords.php';
include_once __DIR__ . '/../Models/Products.php';
include_once __DIR__ . '/../Models/Suggested_Products.php';
include_once __DIR__ . '/../Models/Suppliers.php';
include_once __DIR__ . '/../Models/Wishlists.php';
function GetConnection()
{
        global $sql_password;
        $conn = new mysqli('localhost', 'plotkinm', $sql_password, 'plotkinm_db');
        return $conn;
}

function fetch_all($sql)
{
        $ret = array();
        $conn = GetConnection();
        $result = $conn->query($sql);
        
        while ($rs = $result->fetch_assoc()) {
                $ret[] = $rs;
        }
        
        $conn->close();
        return $ret;
}

function fetch_one($sql)
{
        $arr = fetch_all($sql);
        return $arr[0];
}