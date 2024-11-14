<?php

if(isset($_COOKIE['name'])){

    print_r($_COOKIE['name']);
}else{
    echo "cookie expires";
}