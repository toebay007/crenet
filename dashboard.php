<?php  include "123Headersz.php"; 

$staffdeets = $cren->getDetails();

?>

<div class="row divsd" style="margin-top: 40px;">
    <div class="col-md-3 divsd">
        <div class="col-md-10 offset-md-1 divsd text-center">
            <img src="images/Screenshot 2022-02-13 164034.jpg" alt="User Photo" class="dashImg">
            <a href="dashboard.php"><h4>Dashboard</h4></a>
        </div>
        <div class="col-md-10 offset-md-1 divsd text-center">
          
                <button class="btn btn-lg bnsz" id="mPaym">Make payment</button>
          
        </div>
        <div class="col-md-10 offset-md-1 divsd text-center">
         
                <button class="btn btn-lg bnsz" id="cr8U">Create Users</button>
      
        </div>
        <div class="col-md-10 offset-md-1 divsd text-center">
        
                <button class="btn btn-lg bnsz" id="vieUse">View Users</button>
        
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
        <div class="col-md-12 divsd" id="salaryP">
            <h4 class="text-center">Salary Payment</h4>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Payment to</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="#" method="post">
                        <tr>
                            <td>1</td>
                            <td>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Staff name</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" class="form-control" name="#">
                            </td>
                            <td>
                                <button class="btn btn btn-outline-secondary">Pay Staff</button>
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
        <div class="col-md-12 divsd" id="CreateP">
            <h4 class="text-center">Create User</h4>
            <div class="col-md-10 offset-md-1 divsd mt-4">
                <form method="POST" action="formclass.php" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" name="fnamez" id="validationCustom01" placeholder="First name" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lnamez" id="validationCustom02" placeholder="Last name" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob1" id="validationCustom04" value="State of Origin" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Staff Picture</label>
                        <input type="file" class="form-control" name="pPhoto" id="validationCustom03">
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="terms" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" name="submit" type="submit">Create User</button>
                    </div>
                    </form>
            </div>
        </div>
        <div class="col-md-12 divsd" id="users">
            <h4 class="text-center">List of Users</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sn</th>
                        <th>Full name</th>
                        <th>Username</th>
                        <th>Created Password</th>
                    </tr>
                </thead>
                <tbody>
                <?php  if(empty($staffdeets)){   ?>


                <?php } else{ foreach($staffdeets as $staff){  ?>        

                    <tr>
                        <td><?php echo $staff['id']; ?> </td>
                        <td><?php echo $staff['fnamez']; ?> <?php echo $staff['lnamez']; ?></td>
                        <td><?php echo $staff['usernamez']; ?> </td>
                        <td><?php if(empty($staff['pwdsz'])){ echo $staff['newPwd']; } else{ echo "Password Changed by Staff"; }?> </td>
                    </tr>
                    <?php } } ?>
                </tbody>
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