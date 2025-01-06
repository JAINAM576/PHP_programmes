<?php  include "../db/db.php";
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
$degree=$_POST['degree'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$grade=$_POST['grade'];
$institute_name=$_POST['institute_name'];



echo $_SESSION['id'];

$query = 'INSERT INTO `user_education` (`order_id`, `degree`, `institution_name`, `start_date`, `end_date`, `Grade`, `uid`) VALUES (NULL, ?, ?, ?, ?, ?, ?)';
$stmt=mysqli_prepare($conn,$query);


mysqli_stmt_bind_param($stmt,'sssssi',$degree,$institute_name,$start_date,$end_date,$grade,$_SESSION['id']);
if(mysqli_stmt_execute($stmt)){
    echo "Sucessfully Add into database";
}
else{
    echo "Something went wrong";

}
}
?>
