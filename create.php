<?php  

    require("conndb.php");

    class userzs extends connCrenet{
         
        function regUser($fnamez,$lnamez,$dob1,$terms,$targetFilePath){
            $targetDir = "images/";
            $fileName = basename($_FILES["pPhoto"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                //determine permitted array
                    $allowTypes = array('jpg','png','svg','jpeg','gif','pdf','JPG');
                        //if array is present or present
                    if(in_array($fileType, $allowTypes)){
                         //upload  picture to image folder
                         if(move_uploaded_file($_FILES["pPhoto"]["tmp_name"], $targetFilePath)){
                            // insert into database
                            if(!$fnamez || !$lnamez || !$dob1){
                                header("location:dashboard.php?registration=incomplete");
                            }  else {
                                //emails does not exist
                                //generate username and password...
                                $username = "";
                                $sn = mt_rand(100,1000);
                                $username = $lnamez.'Crenet'.$sn;
                                //echo $username;
                                $pwd = "";
                                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
                                $pwrd = substr( str_shuffle( $chars ), 0, 8 );
                                $pwd = $pwrd;
                                //echo $pwd;

                                
                                $sql = "INSERT INTO userz1 SET
                                    fnamez = '$fnamez',
                                    lnamez = '$lnamez',
                                    dob1 = '$dob1',
                                    terms = '$terms',
				                    pPhoto = '$targetFilePath',
                                    usernamez = '$username',
                                    statuss = 'staff',
                                    newPwd = '$pwd'";
                
                                $id = $this->conn->insert_id;
                
                                $result = $this->conn->query($sql);
                
                                if($result == true){
                                    header("location:dashboard.php?success=succesfully_created");
                                } else{
                                    header("location:dashboard.php?registration=failed");
                                }

                         }

                    }else{
                        header("location:dashboard.php?registration=checkImage");
                    }
        
        }

    }


    function stafflogin($username,$password){

        // $encryptedzz = md5($password);

        $sql = "SELECT * FROM userz1 WHERE usernamez ='$username' ";

        $result = $this->conn->query($sql);
        // print_r($result);
        if ($result->num_rows > 0){
           
            $deets = $result->fetch_assoc();

                 // print_r($result);
                 // echo  $deets['pwdsz'];

                 $pwds = $deets['pwdsz'];
            //validation to check if the user is a new staff or not.
            if(!empty($pwds)){
                
                    
                    $encrypted = md5($password);
                        // echo($encrypted);

                        $sql1= "SELECT * FROM userz1 WHERE usernamez = '$username' AND pwdsz = '$encrypted'";

                        $results = $this->conn->query($sql1);

                         print_r($results);
                    if ($results->num_rows > 0) { //==1 valid details
                    
                        $deetz = $results->fetch_assoc();
                        
                        $_SESSION['id'] = $deetz['id'];
                        $_SESSION['fnamez'] = $deetz['fnamez'];
                        $_SESSION['lnamez'] = $deetz['lnamez'];
                        $_SESSION['dob1'] = $deetz['dob1'];
                        $_SESSION['crenet'] = $deetz['usernamez'];
                        $_SESSION['pic'] = $deetz['pPhoto'];
                        $_SESSION['statuss'] = $deetz['statuss'];
                            // check staff status to decide where they should be redirected to
                            if($_SESSION['statuss'] === 'staff'){
                                // redirect to staff website

                                header("location:staffdashboard.php?login=success");

                            } else if($_SESSION['statuss'] === 'admin'){
                                // redirect to admin website

                                header("location:dashboard.php?login=success");

                            } else{
                                header ("location:index.php?oldStaffstatus=error");
                            }
                    
                    } else {
                        header ("location:index.php?Stafflogin=fail");
                    }

         } else {    

             // echo"NewBie"; 

              $sql= "SELECT * FROM userz1 WHERE usernamez = '$username' AND newPwd = '$password'";


                        $result = $this->conn->query($sql);

                            // print_r($result);
                    if ($result->num_rows > 0) { //==1 valid details
                    
                        $deetz = $result->fetch_assoc();
                        
                        $_SESSION['id'] = $deetz['id'];
                        $_SESSION['fnamez'] = $deetz['fnamez'];
                        $_SESSION['lnamez'] = $deetz['lnamez'];
                        $_SESSION['dob1'] = $deetz['dob1'];
                        $_SESSION['crenet'] = $deetz['usernamez'];
                        $_SESSION['pic'] = $deetz['pPhoto'];
                        $_SESSION['statuss'] = $deetz['statuss'];
                            // check staff status to decide where they should be redirected to
                            if($_SESSION['statuss'] === 'staff'){
                                // redirect to staff website

                                header("location:staffdashboard.php?login=success");

                            } else if($_SESSION['statuss'] === 'admin'){
                               // redirect to admin website

                                header("location:dashboard.php?login=success");

                            } else {
                                 header ("location:index.php?status=error");
                            }

                      
                    
                    } else {
                        header ("location:index.php?login=fail");
                    }

            }
            
        } else{
            header ("location:index.php?user=error");
        }

    }


    function salary($staffsz,$amount,$salary){

        $sql = "INSERT INTO salary SET
        usersz = $staffsz,
        amount = '$amount',
        purpose = '$salary'";

         $id = $this->conn->insert_id;

        $result = $this->conn->query($sql);

        if($result == true){
            header("location:dashboard.php?payment=succesful");
        } else{
            header("location:dashboard.php?payment=failed");
        }


    }






}