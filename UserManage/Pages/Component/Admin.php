<?php
   if(!isset($_SESSION))
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            box-sizing: border-box;
            background-color: #f8f9fa;
        }
        .dashboard-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 1, 0.3);
            margin: 20px 0;
            height: 80vh;
        }
        .dashboard-text {
            max-width: 600px;
        }
        .dashboard-image {
            max-width: 500px;
            height: auto;
            border-radius: 10px;
        }
        h1 {
            color: #007bff;
            font-weight: bold;
        }
        p {
            font-size: 1.1em;
            color: #555;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.1em;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="dashboard-section">
            <div class="dashboard-text">
                <h1>Welcome, Admin!</h1>
                <p>Admin Name: <strong id="user_name"></strong></p>
                <p>This is the admin dashboard where you can manage users, view their details, approve requests, and ensure the system runs smoothly.</p>
                <a href="./User_Requests.php" class="btn btn-custom">View User Requests</a>
                <a href="./See_Users.php" class="btn btn-custom">See All Users</a>
            </div>
            <img src="../../images/Admin.png" alt="Admin Dashboard" class="dashboard-image" />
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<script>
let user_name=document.getElementById("user_name");
let getName="<?php echo $_SESSION['name'];?>";
console.log(getName);
user_name.textContent=getName;
</script>
</html>
