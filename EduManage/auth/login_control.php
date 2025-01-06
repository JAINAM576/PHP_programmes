<?php
 include "../db/db.php";
include "./startSession.php";


if($_SERVER['REQUEST_METHOD']=='POST'){

$email=$_POST['email'];
$password=$_POST['password'];




$query='select uid,firstname,password,lastname from `user_info` where email=?';
$stmt=mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$email);
mysqli_stmt_execute($stmt);
$response=mysqli_stmt_get_result($stmt);

if($response and mysqli_num_rows($response)==1){
  $row=mysqli_fetch_assoc($response);
  if(password_verify($password,$row['password'])){
    sessionStart($email,$row['firstname'],$row['uid'],$row['lastname']);
   
    header("Location: ../Pages/Component/home.php ");
  }
  else{
    header("Location:  ../Pages/Authentication/registration.php");
  }
}
else{
    header("Location:  ../Pages/Authentication/registration.php");

}
}
?>