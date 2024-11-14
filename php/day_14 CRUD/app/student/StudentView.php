<?php
require_once "./../../database.php";

$student_id =$_GET['id'];
if($conn){


        $dataSql = "SELECT * FROM students WHERE student_id = $student_id";
        $dataResult = $conn->query($dataSql);
        $row = $dataResult->fetch_assoc();

    print_r($row);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>View Student</h1>
                <a href="./Student.php" class="btn btn-primary btn-sm">Students</a>


            </div>
            <div class="col-12">
                <p><strong>Name:</strong> <?php echo $row['student_name']; ?> </p>
                <p><strong>Class:</strong> <?php echo $row['student_class']; ?> </p>
                <p><strong>Roll:</strong> <?php echo $row['student_roll']; ?> </p>
            </div>
        </div>
    </div>

    
</body>
</html>