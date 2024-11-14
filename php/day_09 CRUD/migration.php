<?php

$host="localhost";
$user="root";
$pass="";

$conn = new mysqli($host,$user,$pass);

if($conn){

    echo "Database Server connect success";
}else{
    
    echo "not connect";
}

