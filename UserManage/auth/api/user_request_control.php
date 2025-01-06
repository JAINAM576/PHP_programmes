<?php
if($_SERVER['REQUEST_METHOD']=='GET'){

include "../../db/db.php"; 

header('Content-Type: application/json'); 

$query = "SELECT request_id, email, firstname, lastname, age, gender FROM `user_request`"; 
$result = mysqli_query($conn, $query);

$requests = array();
while ($row = mysqli_fetch_assoc($result)) {
    $requests[] = $row;
}

echo json_encode($requests); 
mysqli_close($conn);
}
?>
