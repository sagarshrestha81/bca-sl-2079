<?php 


// print_r($_GET['email']);
// print_r($_GET['password']);
// print_r($_POST['email']);
// print_r($_POST['password']);

// print_r($_POST);
// print_r($_GET);


// print_r($_REQUEST);
// print_r($_REQUEST['email']);

if(
    $_REQUEST['email'] == "sagarcrestha81@gmail.com" &&
    $_REQUEST['password'] == 1234 
){
    echo "success login";
}else{
    header("Location: form.html");
}


