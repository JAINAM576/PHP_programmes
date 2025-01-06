<?php
include "../../db/db.php"; 

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $request_id = $_POST['request_id'];
    $action = $_POST['action'];

    if ($action === 'accept') {
        // Fetch the user request details
        $query = "SELECT email, firstname, lastname, age, gender, password  FROM user_request WHERE request_id=?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $request_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $requestData = mysqli_fetch_assoc($result);
            
          
            $insertQuery = "INSERT INTO user (`firstname`, `lastname`, `email`, `age`, `gender`, `password`) VALUES (?, ?, ?, ?, ?, ?)";
            $insertStmt = mysqli_prepare($conn, $insertQuery);
            mysqli_stmt_bind_param($insertStmt, 'sssiss', $requestData['firstname'], $requestData['lastname'], $requestData['email'], $requestData['age'], $requestData['gender'], $requestData['password']);
            
            // Execute the insert query
            if (mysqli_stmt_execute($insertStmt)) {
                // Delete the request from user_request after inserting into users
                $deleteQuery = "DELETE FROM user_request WHERE request_id=?";
                $deleteStmt = mysqli_prepare($conn, $deleteQuery);
                mysqli_stmt_bind_param($deleteStmt, 'i', $request_id);
                mysqli_stmt_execute($deleteStmt);
                
                echo json_encode(['message' => 'Request accepted and user added successfully']);
            } else {
                echo json_encode(['message' => 'Failed to add user']);
            }
            
            mysqli_stmt_close($insertStmt);
            mysqli_stmt_close($deleteStmt);
        } else {
            echo json_encode(['message' => 'No such request found']);
        }

        mysqli_stmt_close($stmt);
        
    } elseif ($action === 'reject') {
        // Just delete the request from user_request
        $deleteQuery = "DELETE FROM user_request WHERE request_id=?";
        $deleteStmt = mysqli_prepare($conn, $deleteQuery);
        mysqli_stmt_bind_param($deleteStmt, 'i', $request_id);
        
        if (mysqli_stmt_execute($deleteStmt)) {
            echo json_encode(['message' => 'Request rejected successfully']);
        } else {
            echo json_encode(['message' => 'Failed to reject request']);
        }
        
        mysqli_stmt_close($deleteStmt);
    } else {
        echo json_encode(['message' => 'Invalid action']);
    }

    mysqli_close($conn);
} else {
    echo json_encode(['message' => 'Invalid request']);
}
?>
