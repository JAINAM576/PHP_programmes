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
    if(isset($_COOKIE['email']) and isset($_COOKIE['name']) and isset($_COOKIE['id']) and isset($_COOKIE['lastname'])){
      
        return [TRUE,$_COOKIE['email'],$_COOKIE['name'],$_COOKIE['id'],$_COOKIE['lastname']];
    }

    return [FALSE];
}
?>

