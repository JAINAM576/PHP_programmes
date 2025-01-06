<?php include "../db/db.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['firstName'];
$lastname=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];


$password=password_hash($password,PASSWORD_BCRYPT);
$query='INSERT INTO `user_info` (`uId`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL, ?, ?, ?, ?);';
$stmt=mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'ssss',$name,$lastname,$email,$password);
if(mysqli_stmt_execute($stmt)){
    header("Location:  ../Pages/Authentication/login.php");
}
else{
    header("Location:  ../Pages/Authentication/registration.php");

}
}
?>