<?php
include "../../db/db.php"; 

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uid = $_POST['uid'];

 
    $query = "DELETE FROM user WHERE uid=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $uid);
    
    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['message' => 'User removed successfully']);
    } else {
        echo json_encode(['message' => 'Failed to remove user']);
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo json_encode(['message' => 'Invalid request']);
}
?>
