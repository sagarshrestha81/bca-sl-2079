
<?php 

$table_name="students";
$sql = 
"CREATE TABLE $table_name
(student_id INT AUTO_INCREMENT PRIMARY KEY, 
student_name VARCHAR(32) NOT NULL, 
student_class VARCHAR(32) NOT NULL, 
student_roll INT NOT NULL)";

$result = $conn->query($sql);
if($result){
    echo "Table has been created ($table_name) <br/>";
    
}else{    
    echo "Table has not been created ($table_name) <br/>";
}