<?php
 include "../../db/db.php";
include "../../auth/startSession.php";

function startSessionquery($id,$role){

if($role=="admin"){
    $query="SELECT * FROM `admin` where AId=?";
$stmt=mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'i',$id);
mysqli_stmt_execute($stmt);
$response=mysqli_stmt_get_result($stmt);
if($response and mysqli_num_rows($response)==1){
    AdminsessionStart($row['email'],$row['name'],$row['AId'],$role);
}
}
}

?>
