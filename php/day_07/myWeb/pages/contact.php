<?php
session_start();
// echo $_SESSION['gum'];
echo $_SESSION['username'];
$_SESSION['username']= "ram";
session_destroy();

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

    <h1  class="alert alert-success">Contact page</h1>
    <?php include "./../layout/footer.php"; ?>

   
</body>
</html>