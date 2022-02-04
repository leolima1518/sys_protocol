<?php

    $servername = "localhost";
    $username = "root";
    $password = "81855688lima";
    
    $conn = new PDO("mysql:host=$servername;dbname=sistema_test", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

?>