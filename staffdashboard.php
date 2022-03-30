<?php  include "123Headersz.php"; 

$staffdeets = $cren->getDetails();

$payment = $cren->getPayment($id);
$total = $cren->countOrders($id);

?>

<div class="row divsd" style="margin-top: 40px;">
    <div class="col-md-3 divsd">
        <div class="col-md-10 offset-md-1 divsd text-center">
            <?php  if(empty($total)){ ?> <?php } else{ foreach ($total as $tots){  ?> 
                <img src="<?php echo $tots['pPhoto']; ?>" alt="User Photo" class="dashImg">
            <?php } }  ?>
            <a href="staffdashboard.php"><h4>Dashboard</h4></a>
        </div>
        <div class="col-md-10 offset-md-1 divsd text-center">
          
                <button class="btn btn-lg bnsz" id="edAcc">Edit Account</button>
        
        </div>
    </div>
    <div class="col-md-9 divsd">
            <?php  include "notify.php"; ?>
        <div class="col-md-12 divsd" id="homeP">
            <?php  if(empty($total)){ ?> <?php } else{ foreach ($total as $tots){  ?> 
            <h4 class="text-center">Welcome <?php echo $tots['lnamez']; ?></h4>
            <p>Total income: <span><?php echo $tots['amount']; ?></span></p>
            <?php } }  ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Payment for</th>
                    </tr>
                </thead>
                <tbody>
                <?php  if(empty($payment)){   ?>
                        <tr>
                            <td colspan="3" class="text-center">No amount paid</td>
                        </tr>

                    <?php } else{ foreach($payment as $pays){  ?>  
                    <tr>
                        <td><?php echo $pays['paidOn']; ?></td>
                        <td><?php echo $pays['amount']; ?></td>
                        <td><?php echo $pays['purpose']; ?></td>
                    </tr>
                    <?php } }  ?>
                </tbody>
            </table>
        </div>   
        <div class="col-md-12 divsd" id="EditP">
            <h4 class="text-center">Update Account</h4>
            <h4>Change Password</h4>
            <form action="formclass.php?id=<?php echo $id; ?>" method="post">
                <div class="col-md-4">
                    <label for="oldPwd">Current Password</label>
                    <input type="password" id="oldPwd" name="oldPwd1" class="form-control">
                </div> <br>
                <div class="col-md-4">
                    <label for="newPwd12"> New Password</label>
                        <input type="password" class="form-control" name="newPwd12" id="newPwd12">
                </div>
                <div class="col-md-4">
                    <label for="newPwd13">Confirm Password</label>
                        <input type="password" class="form-control" name="newPwd13" id="newPwd12">
                </div>
                <div class="col-md-4">
                    <button type="submit" name="subPwds" class="btn btn-lg mt-4 bnsz">Update</button>
                </div>
            </form>
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