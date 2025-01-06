<?php
include '../../auth/checkAuth.php';
include '../../auth/startSessionQuery.php';
 
$cookie_array=checkCookie();
if ($cookie_array[0]==TRUE ){
startSessionquery($cookie_array[2],$cookie_array[3]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../../css/comman.css">
    <link rel="stylesheet" href="../../css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
   <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-9">
            <div class="card">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="../../images/login.png" alt="login form" class="img-fluid" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body">

                    <form method="POST" action="../../auth/login_control.php">

                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-lock fa-2x me-3" style="color: #007bff;"></i> 
                        <span class="h1 fw-bold mb-0 text-decoration-underline">Welcome Back</span>
                      </div>

                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login to your account</h5>

                      <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control form-control-lg" name="email" required/>
                        <label class="form-label" for="email">Email Address</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control form-control-lg" name="password" required/>
                        <label class="form-label" for="password">Password</label>
                      </div>

                 
                      <div class="form-outline mb-4">
                        <select id="role" class="form-select form-control-lg" name="role" required>
                          <option value="">Select Role</option>
                          <option value="user">User</option>
                          <option value="admin">Admin</option>
                        </select>
                        <label class="form-label" for="role">Role</label>
                      </div>

                      <div class="pt-1 mb-4">
                        <button class="btn btn-lg btn-block" type="submit">Login</button>
                      </div>

                      <a class="small text-muted" href="#!">Forgot your password?</a>
                      <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? 
                        <a href="./registration.php" style="color: #007bff;">Register here</a></p>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </section>
</body>

</html>
