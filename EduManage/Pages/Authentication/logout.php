<?php
if(isset($_SESSION)){
    session_unset();
    session_destroy();
}
setcookie("name", "", time() - 3600, "/");
setcookie("email", "", time() - 3600, "/");
setcookie("id", "", time() - 3600, "/");
setcookie("lastname", "", time() - 3600, "/");


header("Location: ./login.php");

?>
