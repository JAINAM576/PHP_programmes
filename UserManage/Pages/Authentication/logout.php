<?php
if(isset($_SESSION)){
    session_unset();
    session_destroy();
}
if($_COOKIE['role']=='admin'){

   setcookie('adminemail',$email,time()-3600,"/");
    setcookie('adminname',$name,time()-3600,"/");
    setcookie('adminid',$id,time()-3600,"/");
    setcookie('role',$role,time()-3600,"/");

}

header("Location: ./login.php");

?>
