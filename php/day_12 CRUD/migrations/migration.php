<?php

$host="localhost";
$user="root";
$pass="";
$db="aad";

$conn = new mysqli($host,$user,$pass);

if($conn){
    echo "Database Server connect success <br/>";

    $sql= "CREATE DATABASE $db";

    $result = $conn->query($sql);   

    if($result){
        echo "Database has been created ($db) <br/>";
    }else{
        echo "Database has not been created <br/>";
    }

    // Connect database
    $conn = new mysqli($host,$user,$pass,$db);
    
    require_once "./database/students.php";
    require_once "./database/teachers.php";

}else{    
    echo "not connect <br/>";
}

