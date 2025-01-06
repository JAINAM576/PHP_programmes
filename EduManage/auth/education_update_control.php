<?php

// UPDATE `user_education` SET `degree` = 'Grad1', `institution_name` = 'insti1', `start_date` = '2024-10-02', `Grade` = '6' WHERE `user_education`.`order_id` = 2

include "../db/db.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
$id=$_POST['id'];

$degree=$_POST['degree'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$grade=$_POST['grade'];
$institute_name=$_POST['institute_name'];




$query='UPDATE `user_education` SET `degree` = ?, `institution_name` = ?, `start_date` = ?,`end_date` = ?, `Grade` = ? WHERE `order_id` = ?';
$stmt=mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'sssssi',$degree,$institute_name,$start_date,$end_date,$grade,$id);
if(mysqli_stmt_execute($stmt)){
   echo "Sucess";
}
else{
    echo "Failed";

}
}
?>