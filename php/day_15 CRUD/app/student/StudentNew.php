<?php

require_once "./../../database.php";




if(isset($_POST['submit'])){
    $student_name = $_POST['student_name'];
    $student_class = $_POST['student_class'];
    $student_roll = $_POST['student_roll'];

    if($conn){        
        $sql= "INSERT INTO students (student_name, student_class, student_roll) 
        VALUES ('$student_name',$student_class,$student_roll)";
        $result = $conn->query($sql);
        if($result){
            echo "data has been inserted";
        }else{
            echo "data not has been inserted";
        }

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
    <h1>New Student</h1>
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
    <a href="./Student.php">Goto Students</a>
</body>
</html>