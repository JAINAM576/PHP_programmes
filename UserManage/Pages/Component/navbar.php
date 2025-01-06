<?php
include '../../auth/checkAuth.php';
include '../../auth/startSessionQuery.php';
 
$cookie_array=checkCookie();
if ($cookie_array[0]==TRUE ){
startSessionquery($cookie_array[2],$cookie_array[3]);
}
else{
    header("Location: ../Authentication/login.php");
}

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">UserManage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="Admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_requests.php">User Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="see_users.php">See Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Authentication/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
