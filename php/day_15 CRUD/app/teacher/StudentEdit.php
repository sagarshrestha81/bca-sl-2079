<?php
require_once "./../../database.php";

$student_id =$_GET['id'];
if($conn){


        $dataSql = "SELECT * FROM students WHERE student_id = $student_id";
        $dataResult = $conn->query($dataSql);
        $row = $dataResult->fetch_assoc();

        if(isset($_POST['update'])){
            $student_id = $_POST['update'];
            $student_name = $_POST['student_name'];
            $student_class = $_POST['student_class'];
            $student_roll = $_POST['student_roll'];
        $sql= "UPDATE students SET 
        student_name='$student_name',
        student_class=$student_class, 
        student_roll=$student_roll WHERE student_id=$student_id";

                $result = $conn->query($sql);
                if($result){
                    echo "data has been Updated";

                    header("Location: ./Student.php");
                
                }else{
                    echo "data not has been Updated";
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
    <h1>Edit Student</h1>
    <form action="" method="POST">
        <div>
            <label for="student_name">Student Name:</label>
            <input type="text" name="student_name" value="<?php echo $row['student_name']; ?>">
        </div>
        <div>
            <label for="student_class">Student class:</label>
            <input type="text" name="student_class" value="<?php echo $row['student_class']; ?>">
        </div>
        <div>
            <label for="student_roll">Student roll:</label>
            <input type="text" name="student_roll" value="<?php echo $row['student_roll']; ?>">
        </div>
        <div>
            <button type="submit" name="update" value="<?php echo $row['student_id']; ?>">Submit</button>
            <button type="reset">Reset</button>
        </div>

    </form>
</body>

</html>