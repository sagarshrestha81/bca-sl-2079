<?php

require_once "./../../database.php";
if($conn){
    function getData($conn){
        $dataSql = "SELECT * FROM students";
        $dataResult = $conn->query($dataSql);
        return $dataResult;
    }
    $dataResult=getData($conn);
    

    // print_r($dataResult->num_rows );
    

    if(isset($_POST['delete'])){
        $delete_id = $_POST['delete'];
        $deleteSql = "DELETE FROM students WHERE student_id = $delete_id";
        $res= $conn->query($deleteSql);
        if($res){
            echo "data has been deleted";
            $dataResult=getData($conn);
        }else{
            echo "data not has been deleted";
            
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    

  <div class="container mt-5">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
        <h1>Students list</h1>
        <a href="./StudentNew.php" class="btn btn-sm btn-success">Add Student</a>
        </div>
        <div class="col-12">
        <table  class="table table-striped border ">
        <thead>
            <tr>
                <th>#</th>
                <th>S. Name</th>
                <th>S. Class</th>
                <th>S. Roll</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($dataResult->num_rows > 0){ 
                $counter=0;
               while($row = $dataResult->fetch_assoc()){               
                ?>
            <tr>
                <td><?php echo ++$counter ?></</td>
                <td><?php echo $row['student_name'] ?></td>
                <td><?php echo $row['student_class'] ?></td>
                <td><?php echo $row['student_roll'] ?></td>
                <td class="d-flex gap-2 align-items-center">
                    <a href="./StudentView.php?id=<?php echo $row['student_id']?>" class="btn btn-primary btn-sm">View</a>
                    <a href="./StudentEdit.php?id=<?php echo $row['student_id']?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="" method="POST">
                        <button class="btn btn-danger btn-sm" name="delete" value="<?php echo $row['student_id']?>" >Delete</button>
                    </form>
                </td>
            </tr>
            <?php }}else{ ?>
            <tr>
                <td  colspan="100%">Data not found</td>
            </tr>
            <?php } ?>


        </tbody>
    </table>
        </div>
    </div>
  </div>
    
</body>
</html>