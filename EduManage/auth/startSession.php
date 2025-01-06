<?php
function sessionStart($email,$name,$id,$lastname){
if (!isset($_SESSION)){   
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['name']=$name;
    $_SESSION['id']=$id;
    $_SESSION['lastname']=$lastname;

    if(!isset($_COOKIE['email']) and !isset($_COOKIE['name']) and !isset($_COOKIE['id']) and !isset($_COOKIE['lastname'])){

    setcookie('email',$email,time()+84600*30,"/");
    setcookie('name',$name,time()+84600*30,"/");
    setcookie('id',$id,time()+84600*30,"/");
    setcookie('lastname',$lastname,time()+84600*30,"/");


    }
}
}
 

?>