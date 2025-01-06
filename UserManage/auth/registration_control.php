<?php include "../db/db.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['firstName'];
$lastname=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];
$age=$_POST['age'];
$gender=$_POST['gender'];





$password=password_hash($password,PASSWORD_BCRYPT);
// INSERT INTO `user_request` (`request_id`, `email`, `firstname`, `lastname`, `age`, `gender`, `password`) VALUES (NULL, 'jainam@gmail.com', 'ab', 'v', '12', 'male', 'jmcj')
$query='INSERT INTO `user_request` (`request_id`, `email`, `firstname`, `lastname`,`age`,`gender`, `password`) VALUES (NULL, ?, ?, ?, ?,?,?);';
$stmt=mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'sssiss',$email,$name,$lastname,$age,$gender,$password);
if(mysqli_stmt_execute($stmt)){
    header("Location:  ../Pages/Authentication/login.php");
}
else{
    header("Location:  ../Pages/Authentication/registration.php");

}
}
?>