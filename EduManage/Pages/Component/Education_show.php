
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Education - EduManage</title>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; 
        }
        .table-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
        }
        .action-icons {
            font-size: 1.2rem;
            cursor: pointer;
        }
        .action-icons:hover {
            color: #007bff;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="table-container">
            <h2 class="mb-4">Educational Qualifications</h2>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Degree</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Institute Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="educationTableBody">
             
                    <?php include '../../db/db.php';
                
                      
                        $query = "SELECT * FROM user_education where uid=(?)";
                        $stmt=mysqli_prepare($conn,$query);
                        mysqli_stmt_bind_param($stmt,'i',$_SESSION['id']);
mysqli_stmt_execute($stmt);

                        $result = mysqli_stmt_get_result($stmt);
                        while ($row = mysqli_fetch_assoc($result)) {
                              echo "<tr id='row-" . $row['order_id'] . "'>";
                        echo "<td>" . $row['degree'] . "</td>";
                        echo "<td>" . $row['start_date'] . "</td>";
                        echo "<td>" . $row['end_date'] . "</td>";
                        echo "<td>" . $row['Grade'] . "</td>";
                        echo "<td>" . $row['institution_name'] . "</td>";
                        echo "<td>";
                        echo "<i class='fas fa-edit action-icons' data-bs-toggle='modal' data-bs-target='#updateModal' data-id='" . $row['order_id'] . "'></i> ";
                        echo "<i class='fas fa-trash action-icons' onclick='deleteEducation(" . $row['order_id'] . ")'></i>";
                        echo "</td>";
                        echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Education Qualification</h5>
                    <button type="button" id="btn-close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateForm">
                        <input type="hidden" id="educationId" name="id">
                        <div class="mb-3">
                            <label for="degree" class="form-label">Degree</label>
                            <input type="text" class="form-control" id="updateDegree" name="degree" required>
                        </div>
                        <div class="mb-3">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="updateStartDate" name="start_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="updateEndDate" name="end_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="grade" class="form-label">Grade</label>
                            <input type="text" class="form-control" id="updateGrade" name="grade" required>
                        </div>
                        <div class="mb-3">
                            <label for="institute" class="form-label">Institute Name</label>
                            <input type="text" class="form-control" id="updateInstitute" name="institute_name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
       
        function deleteEducation(id) {
            if (confirm('Are you sure you want to delete this record?')) {
               const formData = new URLSearchParams();
                 formData.append('id', id);
                fetch('../../auth/education_delete_control.php', {
                    method: 'POST',
                    
            body: formData
                }).then(response => response.text())
               .then(data => {
                    document.getElementById(`row-${id}`).remove();
                    showAlert('alert','message','Row Deleted Sucessfully');
               })
            .catch(error => {
                
                    showAlert('error_alert','error_message','Something Went Wrong');

            });
            }
        }
                      

        document.querySelectorAll('.fa-edit').forEach(icon => {
            icon.addEventListener('click', function () {
                const row = this.closest('tr');
                document.getElementById('educationId').value = this.dataset.id;
                document.getElementById('updateDegree').value = row.children[0].textContent;
                document.getElementById('updateStartDate').value = row.children[1].textContent;
                document.getElementById('updateEndDate').value = row.children[2].textContent;
                document.getElementById('updateGrade').value = row.children[3].textContent;
                document.getElementById('updateInstitute').value = row.children[4].textContent;
            });
        });
let updatedform=document.getElementById('updateForm');
        updatedform.addEventListener('submit', function (event) {
            event.preventDefault();
            const formData = new FormData(updatedform);
         
            fetch('../../auth/education_update_control.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text())
              .then(data => {
             
                  const row = document.getElementById(`row-${formData.get('id')}`);
                      row.children[0].textContent = formData.get('degree');
                      row.children[1].textContent = formData.get('start_date');
                      row.children[2].textContent = formData.get('end_date');
                      row.children[3].textContent = formData.get('grade');
                      row.children[4].textContent = formData.get('institute_name');
                    
                      document.getElementById('btn-close').click();
                    showAlert('alert','message','Row Updated Sucessfully');

              })
            .catch(error => {
 
                   showAlert('error_alert','error_message','Something Went Wrong');


            });;
        });


  
    </script>


</body>
</html>
