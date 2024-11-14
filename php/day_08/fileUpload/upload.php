<?php

if(isset($_POST['submit'])){

    $target_folder= "./uploads/";
    print_r($_FILES);  
    $target_file=$target_folder.basename($_FILES['image']['name']);

    move_uploaded_file($_FILES['image']['tmp_name'],$target_file);




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