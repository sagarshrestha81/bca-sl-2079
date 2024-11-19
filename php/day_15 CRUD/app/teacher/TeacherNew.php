<?php


require_once "./../../database.php";

    $teacher_name = $_POST['teacher_name'];
    $teacher_class = $_POST['teacher_class'];
    $teacher_roll = $_POST['teacher_roll'];

    if($conn){        
        $sql= "INSERT INTO teachers (teacher_name, teacher_class, teacher_roll) 
        VALUES ('$teacher_name',$teacher_class,$teacher_roll)";
        $result = $conn->query($sql);
        if($result){
            echo "data has been inserted";
        }else{
            echo "data not has been inserted";
        }

    }
