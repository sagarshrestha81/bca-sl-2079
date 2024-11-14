<?php

require_once "./../../database.php";
if($conn){
    
    $dataSql = "SELECT * FROM students";
    $dataResult = $conn->query($dataSql);

    // print_r($dataResult->num_rows );
    

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
            <?php if($dataResult->num_rows >0){ ?>
            <tr>
                <td>1</td>
                <td>Ram</td>
                <td>12</td>
                <td>456</td>
                <td>
                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <?php }else{ ?>
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