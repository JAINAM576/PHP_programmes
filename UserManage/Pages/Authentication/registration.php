<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
                  <img src="../../images/registration.png"
                    alt="registration form" class="img-fluid" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body">

                    <form method="POST" action="../../auth/registration_control.php" onsubmit="return validateForm()">

                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-user-plus fa-2x me-3" style="color: #007bff;"></i> 
                        <span class="h1 fw-bold mb-0 text-decoration-underline">Create Account</span> 
                      </div>

                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                      <div class="row g-0 justify-content-between">
                          <div class="form-outline mb-2" style="width:48%;">
                              <input type="text" id="firstname" class="form-control form-control-lg" name="firstName" required/>
                              <label class="form-label" for="firstname">First Name</label>
                          </div>
                          <div class="form-outline mb-2" style="width:48%;">
                              <input type="text" id="lastName" class="form-control form-control-lg" name="lastName" required/>
                              <label class="form-label" for="lastName">Last Name</label>
                          </div>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control form-control-lg" name="email" required/>
                        <label class="form-label" for="email">Email Address</label>
                      </div>

                      <div class="row g-0 justify-content-between">
                          <div class="form-outline mb-4" style="width:48%;">
                              <input type="number" id="age" class="form-control form-control-lg" name="age" required/>
                              <label class="form-label" for="age">Age</label>
                          </div>
                          <div class="form-outline mb-4" style="width:48%;">
                              <select id="gender" class="form-select form-control-lg" name="gender" required>
                                  <option value="">Select Gender</option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                  <option value="other">Other</option>
                              </select>
                              <label class="form-label" for="gender">Gender</label>
                          </div>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control form-control-lg" name="password" required/>
                        <label class="form-label" for="password">Password</label>
                      </div>
                      
                      <div class="form-outline mb-4">
                        <input type="password" id="confirmpassword" class="form-control form-control-lg" name="confirmpassword" required />
                        <label class="form-label" for="confirmpassword">Confirm Password</label>
                      </div>

                      <div class="pt-1 mb-4">
                        <button class="btn btn-lg btn-block" type="submit">Register</button>
                      </div>

                      <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? 
                        <a href="./login.php" style="color: #007bff;">Login here</a></p>
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

<script>
    function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        var age = document.getElementById("age").value;

        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return false;
        }

        if (age <= 0) {
            alert("Please enter a valid age.");
            return false;
        }

        return true;
    }
</script>
</html>
