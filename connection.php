<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'simple_api';

    try{
        $conn = new mysqli($host, $user, $password, $dbname);
    }
    catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }    
?>