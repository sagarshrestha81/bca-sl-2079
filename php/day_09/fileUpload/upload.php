<?php

if(isset($_POST['submit'])){

    // $target_folder= "./uploads/";

    // $target_file=$target_folder.time().basename($_FILES['image']['name']);

    // move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

 

    setcookie('name','ram',time()+30,path: '/');
    setcookie('address','koteshwor',time()+30,path: '/');

    // print_r($_COOKIE);
    print_r($_COOKIE['name']);


    $to = "sagarcrestha81@gmail.com";
    $subject="daraz";
    $message="hello  im from daraz";

    mail($to,$subject,$message);



}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="#" method="post" enctype="multipart/form-data" >
<input type="file" name="image">
<button type="submit" name="submit" >Submit</button>

</form>


</body>
</html>