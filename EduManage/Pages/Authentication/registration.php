<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
   <section class="vh-100 bg-dark overflow-hidden">
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../../images/form.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-3 p-lg-5 text-black">

                <form method="POST" action="../../auth/registration_control.php" onsubmit="return validateForm()">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Registartion</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign Up your account</h5>
<div class="row g-0 justify-content-between">

             <div data-mdb-input-init class="form-outline mb-2 " style="width:48%;" >
                    <input type="text" id="firstname" class="form-control form-control-lg" name="firstName" required/>
                    <label class="form-label" for="firstname">FIRST NAME:</label>
                  </div>
             <div data-mdb-input-init class="form-outline mb-2 w-[48%]" style="width:48%;">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="lastName" required/>
                    <label class="form-label" for="lastName">LAST NAME:</label>
                  </div>

</div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="email" class="form-control form-control-lg" name="email" required/>
                    <label class="form-label" for="email">Email address</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" name="password" required/>
                    <label class="form-label" for="password">Password:</label>
                  </div>
                     <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="confirmpassword" class="form-control form-control-lg" name="confirmpassword" required />
                    <label class="form-label" for="confirmpassword">Confirm Password:</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                  </div>

                    <p class="mb-3 pb-lg-2" style="color: #393f81;">Already have an account? <a href="./login.php" style="color: #393f81;">Login here</a></p>

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

            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }
    </script>
</html>
