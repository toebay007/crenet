<?php  include "123Headersz.php"; 

$staffdeets = $cren->getDetails();

?>

<div class="row divsd" style="margin-top: 40px;">
    <div class="col-md-3 divsd">
        <div class="col-md-10 offset-md-1 divsd text-center">
            <img src="images/Screenshot 2022-02-13 164034.jpg" alt="User Photo" class="dashImg">
            <a href="staffdashboard.php"><h4>Dashboard</h4></a>
        </div>
        <div class="col-md-10 offset-md-1 divsd text-center">
          
                <button class="btn btn-lg bnsz" id="edAcc">Edit Account</button>
        
        </div>
    </div>
    <div class="col-md-9 divsd">
            <?php  include "notify.php"; ?>
        <div class="col-md-12 divsd" id="homeP">
            <h4 class="text-center">Welcome Akpos</h4>
            <p>Total income: <span> </span></p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Payment for</th>
                    </tr>
                </thead>
            </table>
        </div>   
        <div class="col-md-12 divsd" id="EditP">
            <h4 class="text-center">Update Account</h4>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>
<?php  include "456footersz.php" ?>