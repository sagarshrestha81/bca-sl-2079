<?php
$fileName="example.txt";

if(file_exists($fileName)){
    $file= fopen("example.txt","r");
    while(!feof($file)){
        echo fgets($file) ."<br/>";
    }
}else{
    echo "file not found";
}

