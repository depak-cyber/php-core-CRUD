<?php
 
    $servername = 'localhost';
    $username ='root';
    $password = '';
    $dbname ='mydb';
    
    //create a connection in database
    $conn = new mysqli($servername, $username, $password, $dbname);
    //check for error
    if($conn->connect_error){
        die('connection Failed'. $conn->connect_error);
    }

