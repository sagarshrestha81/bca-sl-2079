<?php 
session_start();
print_r($_SESSION);
// echo $_SESSION['sum'];
echo $_SESSION['username'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "./../layout/links.php"; ?>
</head>
<body>
    <?php include "./../layout/header.php"; ?>
    <h1  class="alert alert-success">About page <?php echo $a ?></h1>
    <?php include "./../layout/footer.php"; ?>
 
</body>
</html>