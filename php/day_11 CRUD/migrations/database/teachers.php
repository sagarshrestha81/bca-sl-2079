<?php
$table_name="teachers";
$sql = 
"CREATE TABLE $table_name
(teacher_id INT AUTO_INCREMENT PRIMARY KEY, 
teacher_name VARCHAR(32) NOT NULL, 
teacher_class VARCHAR(32) NOT NULL, 
teacher_roll INT NOT NULL)";

$result = $conn->query($sql);
if($result){
    echo "Table has been created ($table_name) <br/>";
    
}else{    
    echo "Table has not been created ($table_name) <br/>";
}