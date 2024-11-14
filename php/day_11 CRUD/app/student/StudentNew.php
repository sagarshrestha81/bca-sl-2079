<?php
if(isset($_POST['submit'])){
    echo $_POST['student_name'];
    echo $_POST['student_class'];
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
    <form action="" method="POST">
        <div>
            <label for="student_name">Student Name:</label>
            <input type="text" name="student_name">
        </div>
        <div>
            <label for="student_class">Student class:</label>
            <input type="text" name="student_class">
        </div>
        <div>
            <label for="student_roll">Student roll:</label>
            <input type="text" name="student_roll">
        </div>
        <div>
            <button type="submit" name="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>

    </form>
</body>
</html>