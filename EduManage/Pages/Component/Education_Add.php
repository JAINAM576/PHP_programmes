<!-- add.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Education - EduManage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; 
        }
        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 1, 0.3); 
            padding: 30px;
            margin-top: 50px;
        }
        h2 {
            color: #007bff; 
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #007bff; 
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #0056b3; 
        }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>


    <div class="container mt-5">
        <div class="form-container">
            <h2>Add Education Qualification</h2>
            <form method="POST" action="../../auth/education_add_control.php" id="educationForm">
                <div class="mb-3">
                    <label for="degree" class="form-label">Degree</label>
                    <input type="text" class="form-control" id="degree" name="degree" required>
                </div>
                <div class="mb-3">
                    <label for="startDate" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="startDate" name="start_date" required>
                </div>
                <div class="mb-3">
                    <label for="endDate" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="endDate" name="end_date" required>
                </div>
                <div class="mb-3">
                    <label for="grade" class="form-label">Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade" required>
                </div>
                <div class="mb-3">
                    <label for="institute" class="form-label">Institute Name</label>
                    <input type="text" class="form-control" id="institute" name="institute_name" required>
                </div>
                <button type="submit" class="btn btn-custom">Add Education</button>
            </form>
        </div>
        <div id="result"></div>
    </div>

    <script>
        let educationForm= document.getElementById('educationForm');
         educationForm.addEventListener('submit', function(event) {

            event.preventDefault();
            const startDate = new Date(document.getElementById('startDate').value);
            const endDate = new Date(document.getElementById('endDate').value);
            if (startDate >= endDate) {
                alert('Start date must be before end date.');
                return ;
            }

            const formData = new FormData(educationForm);

            fetch('../../auth/education_add_control.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
document.getElementById('degree').value="";
document.getElementById('startDate').value="";
document.getElementById('endDate').value="";
document.getElementById('grade').value="";
document.getElementById('institute').value="";

                    showAlert('alert','message','Data is Added Sucessfully');
    
            })
            .catch(error => {
                    showAlert('error_alert','error_message','Something Went Wrong');
               
            });
        });
    </script>

</body>
</html>
