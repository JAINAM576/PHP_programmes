<?php
include '../../auth/checkAuth.php';
include '../../auth/startSession.php';
 
$cookie_array=checkCookie();
if ($cookie_array[0]==TRUE ){
sessionStart($cookie_array[1],$cookie_array[2],$cookie_array[3],$cookie_array[4]);
}
else{
    header("Location: ../Authentication/login.php");
}

?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">EduManage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Education_Add.php">Add</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Education_show.php">Show</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#updateProfileModal">Update Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Authentication/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
include './alert.php';
?>


<div class="modal fade" id="updateProfileModal" tabindex="-1" aria-labelledby="updateProfileLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateProfileLabel">Update Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="updateForm1">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" value="<?php echo $_SESSION['name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" value="<?php echo $_SESSION['lastname']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password">
                        <small class="form-text text-muted">Leave blank if you don't want to change the password.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="btn-close1" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>

let updateForm1=document.getElementById('updateForm1');
        updateForm1.addEventListener('submit', function (event) {
            event.preventDefault();
            const formData = new FormData(updateForm1);
         
            fetch('../../auth/profile_control.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text())
              .then(data => {
             
                    console.log(data,"data in navbar")
                      document.getElementById('btn-close1').click();
                    showAlert('alert','message','Profile Updated Sucessfully');
window.location.reload()
              })
            .catch(error => {
 
                   showAlert('error_alert','error_message','Something Went Wrong');
                   


            });;
        });
    </script>