<?php 
// date_default_timezone_set('Asia/Kathmandu');

$date= date("d.M.Y h:i:s A");

$random = date("Ymdhi").rand(1111,9999);

echo $random;
echo "<br/>";
echo $date;




if(isset($_GET["sub"])){
    $err=[];

    $email = $_GET['email'];
    $password = $_GET['password'];
    if(!$email){
        $err['email']="please enter email";
    }

    if(!$password){
        $err['password']="please enter password";
    }
    if($email == "sagarcrestha81@gmail.com" && $password == 1234){
        echo "from submitted";
    }else{
        echo "from not submitted";
    }
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

    <form action="#" method="GET">
        <div class="form-wrapper">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $email ?? "" ?>"/> <?php echo $err['email'] ?? '' ?>
        </div>

        <div class="form-wrapper">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" value="<?php echo $password ?? '' ?>"><?php echo $err['password'] ?? '' ?>
        </div>
        <div class="form-wrapper">
        <button type="submit" name="sub">Submit</button>
        </div>

    </form>
    
</body>
</html>

