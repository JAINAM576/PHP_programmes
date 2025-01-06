<?php
// UPDATE `user_info` SET `firstname` = 'Jaina', `lastname` = 'Snghavi', `email` = 'root1@gmail.com', `password` = '$2y$10$uh5fFY8KEbn1TFBtBJIFxuC2T2k1G53j0.SiXXg4Wkfno0M/wh74' WHERE `user_info`.`uId` = 6

include "../db/db.php";
if(!isset($_SESSION)){

session_start();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $query = 'UPDATE `user_info` SET `firstname` = ?, `lastname` = ?, `email` = ?, `password` = ? WHERE `uId` = ?';
    $stmt=mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'ssssi',$first_name,$last_name,$email,$hashed_password,$_SESSION['id']);
     
    }
     else
     {
            $query = 'UPDATE `user_info` SET `firstname` = ?, `lastname` = ?, `email` = ? WHERE `uId` = ?';
            $stmt=mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'sssi',$first_name,$last_name,$email,$_SESSION['id']);
    }

    if (mysqli_stmt_execute( $stmt)) {
        $_SESSION['name'] = $first_name;
        $_SESSION['lastname'] = $last_name;
        $_SESSION['email'] = $email;

    setcookie('email',$email,time()+84600*30,"/");
    setcookie('name',$first_name,time()+84600*30,"/");
    setcookie('lastname',$last_name,time()+84600*30,"/");
    echo "Sucess";
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }
}

?>