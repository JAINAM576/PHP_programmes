<?php
function sessionStart($email,$name,$id,$lastname,$gender,$age,$role){
if (!isset($_SESSION)){   
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['name']=$name;
    $_SESSION['id']=$id;
    $_SESSION['lastname']=$lastname;

    $_SESSION['gender']=$gender;
    $_SESSION['age']=$age;
    $_SESSION['role']=$role;


    if(!isset($_COOKIE['useremail']) and !isset($_COOKIE['username']) and !isset($_COOKIE['userid']) and !isset($_COOKIE['userlastname'])){
    setcookie('username',$name,time()+84600*30,"/");
    setcookie('userid',$id,time()+84600*30,"/");
    setcookie('userlastname',$lastname,time()+84600*30,"/");
    setcookie('role',$role,time()+84600*30,"/");
    }
}
}

function AdminsessionStart($email,$name,$id,$role){
if (!isset($_SESSION)){   
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['name']=$name;
    $_SESSION['id']=$id;
    $_SESSION['role']=$role;



    if(!isset($_COOKIE['adminemail']) and !isset($_COOKIE['adminname']) and !isset($_COOKIE['adminid']) and !isset($_COOKIE['adminrole'])){
    setcookie('adminemail',$email,time()+84600*30,"/");
    setcookie('adminname',$name,time()+84600*30,"/");
    setcookie('adminid',$id,time()+84600*30,"/");
    setcookie('role',$role,time()+84600*30,"/");


    }
}
}


// Full texts
// AId
 

?>