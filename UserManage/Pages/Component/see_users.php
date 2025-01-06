<?php
include "../../db/db.php"; 
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../Authentication/login.php");
    exit();
}

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See Users - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <style>
        body {
            box-sizing: border-box;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="container">
        <h1 class="text-center">Active Users</h1>
        <table id="usersTable" class="display table table-striped">
            <thead>
                <tr>
                    <th>UID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT uid, firstname, lastname, email, age, gender FROM user";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['uid']}</td>
                            <td>{$row['firstname']}</td>
                            <td>{$row['lastname']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['age']}</td>
                            <td>{$row['gender']}</td>
                            <td>
                                <button class='btn btn-danger btn-remove' data-id='{$row['uid']}'>Remove</button>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#usersTable').DataTable();

            $('.btn-remove').on('click', function() {
                const userId = $(this).data('id');
                const confirmDelete = confirm("Are you sure you want to remove this user?");
                
                if (confirmDelete) {
                    $.ajax({
                        url: '../../auth/api/remove_user.php',
                        type: 'POST',
                        data: { uid: userId },
                        success: function(response) {
                          
                            alert(response.message);
                            location.reload(); 
                        },
                        error: function() {
                            alert("An error occurred while removing the user.");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
