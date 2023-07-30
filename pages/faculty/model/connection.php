<?php
    $server = 'localhost';
    $name = 'root';
    $pass = '12345';
    $dbname = 'acs_db';

    $con = mysqli_connect($server, $name, $pass, $dbname);

    if(!$con){
        echo 'connection error';
    }
    
    
?>