<?php
$servername="localhost";
$hostname="root";
$password="";
$conn=mysqli_connect($servername,$hostname,$password
,'admin_user',3307);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>