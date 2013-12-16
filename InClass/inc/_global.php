<?php 


include_once __DIR__ . '/../Models/cities.php';

function GetConnection()
{
        global $sql_password;
        $conn = new MySQLi('localhost', 'plotkinm', 'FaceBooK', 'plotkinm_db');
        return $conn;
}

function fetch_all($sql)
{
        $ret = array();
        $conn = GetConnection();
        $result = $conn->query($sql);
        echo $conn->error;
        
        while ($rs = $result->fetch_assoc()) {
                $ret[] = $rs;
        }
        
        
        $conn->close();
        return json_encode($ret);;
}

function fetch_one($sql)
{
        $arr = fetch_all($sql);
        return $arr[0];
}