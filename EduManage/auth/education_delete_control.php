<?php
include "../db/db.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
$id=$_POST['id'];
echo $id;

$query='DELETE FROM user_education WHERE `order_id` = ?';
$stmt=mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$id);
if(mysqli_stmt_execute($stmt)){
   echo "Sucess";
}
else{
    echo "Failed";

}
}
?>