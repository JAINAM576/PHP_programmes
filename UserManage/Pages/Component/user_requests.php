<?php
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Requests - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table-container {
            margin: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5 table-container">
        <h1>User Requests</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Request ID</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="userRequestsTableBody">
             
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            fetchUserRequests();
        });

        function fetchUserRequests() {
            $.ajax({
                url: '../../auth/api/user_request_control.php',
                type: 'GET',
                dataType: 'json',
                success: function(requests) {
                    let output = '';
                    requests.forEach(function(request) {
                        output += `
                            <tr>
                                <td>${request.request_id}</td>
                                <td>${request.email}</td>
                                <td>${request.firstname}</td>
                                <td>${request.lastname}</td>
                                <td>${request.age}</td>
                                <td>${request.gender}</td>
                                <td>
                                    <button class="btn btn-success btn-sm" onclick="handleRequest(${request.request_id}, 'accept')">Accept</button>
                                    <button class="btn btn-danger btn-sm" onclick="handleRequest(${request.request_id}, 'reject')">Reject</button>
                                </td>
                            </tr>
                        `;
                    });
                    $('#userRequestsTableBody').html(output);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching user requests:', error);
                }
            });
        }

        function handleRequest(requestId, action) {
            $.ajax({
                url: '../../auth/api/user_requests_handle.php',
                type: 'POST',
                data: {
                    request_id: requestId,
                    action: action
                },
                success: function(response) {
                    alert(response.message);
                    fetchUserRequests(); 
                },
                error: function(xhr, status, error) {
                    console.error('Error handling request:', error);
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
