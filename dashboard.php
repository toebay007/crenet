<?php  include "123Headersz.php"; ?>

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
            
        </div>
        <div class="col-md-12 divsd" id="users">
            <h4 class="text-center">List of Users</h4>
        </div>
        <div class="col-md-12 divsd" id="EditP">
            <h4 class="text-center">Update Account</h4>
        </div>
    </div>
</div>

<?php  include "456footersz.php" ?>