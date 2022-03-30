<?php

error_reporting(0);
session_start();
include "123Headersz.php"; ?>
    <div class="row divsd mt-4">
        <div class="col-md-6 offset-md-3 divsd text-center">
            <h4 class="mt-4">WELCOME TO CRENET PORTAL</h4>
            <div class="mt-4 divsd">
                <?php include "notify.php"; ?>
                <?php if (!isset($_SESSION['statuss'])) { ?>
                <form action="formclass.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="users" name="username" placeholder="Username">
                            <label for="users" style="color: black;">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="pwdsz" placeholder="Password">
                            <label for="pwdsz" style="color: black;">Password</label>
                        </div>
                        <button type="submit" name="login" class="mt-4 btn btn-lg btnsz">Login</button> <br>
                        <button type="submit" name="fPwds" class="mt-4 btn btn-outline-lg btfPwd" disabled>Forgot password</button>
                </form>
                <?php } else{ ?>
                    <div class="col-md-6 offset-md-3 text-center">
                        <h4>Kindly go back, you're still logged in.</h4>
                    </div>
                    <?php } ?>
            </div>
        </div>
    </div>
<?php include "456footersz.php"; ?>