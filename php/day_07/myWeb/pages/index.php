<?php 
session_start();

$_SESSION['sum']=5; 
$_SESSION['gum']=10; 
$_SESSION['username']="Sagar Stha"; 

// echo $_SESSION['sum'];
echo $_SESSION['username'];

print_r($_SESSION);
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require "./../layout/links.php"; ?>
</head>

<body>

    <?php require_once "./../layout/header.php"; ?>
    <?php require_once "./../layout/header.php"; ?>
    <!-- <?php include "./../layout/header.php"; ?> -->
    <!-- <?php include_once "./../layout/header.php"; ?> -->
    
    <h1 class="alert alert-success">This is homepage</h1>

    <?php include "./../layout/footer.php"; ?>
</body>

</html>