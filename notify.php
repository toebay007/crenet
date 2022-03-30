                        <?php
                            if (isset($_GET['success']) && ($_GET['success'] == 'succesfully_created')) {
                                echo '<div class="alert alert-success alert-dismissible fade show text-center">';
                                echo 'User created successfully';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['registration']) && ($_GET['registration'] == 'failed')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'User failed to create. Check that all details are entrerd properly';
                                echo '</div>';
                            }
                        ?>
                        
                        <?php
                            if (isset($_GET['registration']) && ($_GET['registration'] == 'checkImage')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'User failed to create. Check that all details are entrerd properly';
                                echo '</div>';
                            }
                        ?>
                        <!-- login in and login out notification -->

                        <?php
                            if (isset($_GET['status']) && ($_GET['status'] == 'error')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Login Failed. Kindly try again with the correct details';
                                echo '</div>';
                                }
                            ?>
                            <?php
                            if (isset($_GET['login']) && ($_GET['login'] == 'fail')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'If you can see this, KINDLY CONTACT THE ICT DEPT.';
                                echo '</div>';
                                }
                            ?>
                            <?php
                            if (isset($_GET['user']) && ($_GET['user'] == 'error')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'User does not exist.';
                                echo '</div>';
                                }
                            ?>
                            <?php
                            if (isset($_GET['Stafflogin']) && ($_GET['Stafflogin'] == 'fail')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Wrong Password.';
                                echo '</div>';
                                }
                            ?>
                            <!-- logging out -->
                            <?php
                            if (isset($_GET['loggedout']) && ($_GET['loggedout'] == 'success')) {
                                echo '<div class="alert alert-success alert-dismissible fade show text-center">';
                                echo 'Logged out successfully';
                                echo '</div>';
                            }
                        ?>
                        <!-- Changed password notification -->
                        <?php
                            if (isset($_GET['pwd']) && ($_GET['pwd'] == 'successful')) {
                                echo '<div class="alert alert-success alert-dismissible fade show text-center">';
                                echo 'Password changed successfully';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['pwd']) && ($_GET['pwd'] == 'tryAgain')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Can not change password at this time, please try again. And check your DB while at that';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['pwd']) && ($_GET['pwd'] == 'noMatch')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Password do not match or Password is less than 6 characters';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['pwd']) && ($_GET['pwd'] == 'incorrect')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Old passwords is wrong';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['pwd']) && ($_GET['pwd'] == 'DbDown')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Check Databse connection';
                                echo '</div>';
                            }
                        ?>
                        <!-- salary notification -->
                        <?php
                            if (isset($_GET['payment']) && ($_GET['payment'] == 'succesful')) {
                                echo '<div class="alert alert-success alert-dismissible fade show text-center">';
                                echo 'Payment completed';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['payment']) && ($_GET['payment'] == 'failed')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Payment failed, check that all details are complete';
                                echo '</div>';
                            }
                        ?>
