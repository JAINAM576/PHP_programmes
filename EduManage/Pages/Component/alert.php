<div id="alert" class="alert alert-success alert-dismissible fade hide" style='position:fixed;'>
    <strong >Success!</strong> <span  id="message">Row Updated Sucessfully.</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>

<div id="error_alert" class="alert alert-danger alert-dismissible fade hide" style='position:absolute;'>
    <strong>Error!</strong><span id="error_message" A problem has been occurred while submitting your data.</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>

<script>
      function showAlert(alertId,MessageId,Message){
  document.getElementById(`${alertId}`).classList.remove('hide');
                document.getElementById(`${alertId}`).classList.add('show');
                document.getElementById(`${MessageId}`).innerText=`${Message}`;
setTimeout(() => {
                document.getElementById(`${alertId}`).classList.add('hide');
                document.getElementById(`${alertId}`).classList.remove('show');
}, 2000);
            
        }
    </script>