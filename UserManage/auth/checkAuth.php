<?php
function CheckAuthentication(){
if(!isset($_SESSION)){

    session_start();
}
    if(isset($_SESSION) and isset($_SESSION['email'])){

      return TRUE;
    }
     header("Location: ../Authentication/login.php");
}

function checkCookie(){
  
if(!isset($_COOKIE['role']))
    return [FALSE];

if($_COOKIE['role']=='admin'){
       if(!isset($_COOKIE['adminemail']) and !isset($_COOKIE['adminname']) and !isset($_COOKIE['adminid'])){
    return [FALSE];

       }
       else{
return [TRUE,$_COOKIE['adminemail'],$_COOKIE['adminid'],'Admin'];
       }

}
else{
    if(!isset($_COOKIE['useremail']) and !isset($_COOKIE['username']) and !isset($_COOKIE['userid']) and !isset($_COOKIE['userlastname'])){
   return [FALSE];
    }
    else{
return [TRUE,$_COOKIE['useremail'],$_COOKIE['userid'],'User'];
    }
}

}
?>

