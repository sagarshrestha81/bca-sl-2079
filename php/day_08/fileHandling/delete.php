<?php
$fileName="Online.png";

if(file_exists($fileName)){   
    unlink($fileName);  
}else{
    echo "file not found";
}

