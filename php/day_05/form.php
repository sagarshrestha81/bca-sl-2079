<?php 
print_r($_GET);
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
            <input type="email" name="email" id="email">
        </div>

        <div class="form-wrapper">
            <label for="password">Password</label>
            <input type="text" name="password" id="password">
        </div>
        <div class="form-wrapper">
        <button type="submit">Submit</button>
        </div>

    </form>
    
</body>
</html>

