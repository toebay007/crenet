<?php

    include('conndbz.php');

    class staff extends connUsers{


            function getDetails(){
                $sql = "SELECT * FROM userz1";
                $result = $this->conns->query($sql);
                $items = [];
                if ($result->num_rows > 0){
                    while ( $row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }



            function getDeeets($id){
                
                $sql = "SELECT concat(fnamez,' ',lnamez)as fullnames, pPhoto, usernamez, dob1 FROM userz1 where id = $id";
                $result = $this->conns->query($sql);
                $items = [];
                if ($result->num_rows > 0){
                    while ( $row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }



            function changePwd($id,$oldPwd1,$newPwd12,$newPwd13){
                $sql = "SELECT * FROM userz1 where id = $id";
                $result = $this->conns->query($sql);

                // print_r($result);

                if ($result->num_rows > 0) { //==1 valid details
                
                    $deetz = $result->fetch_assoc();
                        
                    $_SESSION['pwds'] = $deetz['newPwd'];
                    $_SESSION['statuss'] = $deetz['statuss'];

                    //
                    $_SESSION['newPP'] = $deetz['pwdsz'];
                    $currentPassword = $_SESSION['newPP'];

                    //
                    $idzs =  $_SESSION['pwds'];
                    if(empty($currentPassword)){
                        // treat as fresh login from user 
                        // echo "New user";

                        // echo $oldPwd1;

                    if($oldPwd1 === $idzs){

                        // echo $oldPwd1;
                          if($newPwd12 === $newPwd13 && strlen($newPwd12) >= 6){
                              // encrypt password
                             $encrypted = md5($newPwd12);
                            // echo $newPwd13;
                             $sql1 = "UPDATE userz1 SET pwdsz ='$encrypted' WHERE id = $id";
                             $ids = $this->conns->insert_id;
                                                     
                             $result = $this->conns->query($sql1);
                                 // var_dump($result);
                                     if($result == true){
                                         
                                         if($_SESSION['statuss'] === 'staff'){
                                             header("location:staffdashboard.php?pwd=successful");
                                         } else if($_SESSION['statuss'] === 'admin'){
                                             header("location:dashboard.php?pwd=successful");
                                         }
                                         
 
                                     }else{
                                         if($_SESSION['statuss'] === 'staff'){
                                             header("location:staffdashboard.php?pwd=tryAgain");
                                         } else if($_SESSION['statuss'] === 'admin'){
                                             header("location:dashboard.php?pwd=tryAgain");
                                         }
                                     }
                          } else{
                             if($_SESSION['statuss'] === 'staff'){
                                 header("location:staffdashboard.php?pwd=noMatch");
                             } else if($_SESSION['statuss'] === 'admin'){
                                 header("location:dashboard.php?pwd=noMatch");
                             }
                         }
 
 
                     } else{
                         if($_SESSION['statuss'] === 'staff'){
                             header("location:staffdashboard.php?pwd=incorrect");
                         } else if($_SESSION['statuss'] === 'admin'){
                             header("location:dashboard.php?pwd=incorrect");
                         }
                         
                     }


                    } else{
                        // treat as old login
                       // echo "Old user";
                       
                      $encryptedsz = md5($oldPwd1);
                        echo $currentPassword;

                    if($encryptedsz === $currentPassword){

                        // echo $oldPwd1;
                          if($newPwd12 === $newPwd13 && strlen($newPwd12) >= 6){
                              // encrypt password
                             $encrypted = md5($newPwd12);
                            // echo $newPwd13;
                             $sql1 = "UPDATE userz1 SET pwdsz ='$encrypted' WHERE id = $id";
                             $ids = $this->conns->insert_id;
                                                     
                             $result = $this->conns->query($sql1);
                                 // var_dump($result);
                                     if($result == true){
                                         
                                         if($_SESSION['statuss'] === 'staff'){
                                             header("location:staffdashboard.php?pwd=successful");
                                         } else if($_SESSION['statuss'] === 'admin'){
                                             header("location:dashboard.php?pwd=successful");
                                         }
                                         
 
                                     }else{
                                         if($_SESSION['statuss'] === 'staff'){
                                             header("location:staffdashboard.php?pwd=tryAgain");
                                         } else if($_SESSION['statuss'] === 'admin'){
                                             header("location:dashboard.php?pwd=tryAgain");
                                         }
                                     }
                          } else{
                             if($_SESSION['statuss'] === 'staff'){
                                 header("location:staffdashboard.php?pwd=noMatch");
                             } else if($_SESSION['statuss'] === 'admin'){
                                 header("location:dashboard.php?pwd=noMatch");
                             }
                         }
 
 
                     } else{
                         if($_SESSION['statuss'] === 'staff'){
                             header("location:staffdashboard.php?pwd=incorrect");
                         } else if($_SESSION['statuss'] === 'admin'){
                             header("location:dashboard.php?pwd=incorrect");
                         }
                         
                     }

                    }

                } else{
                    if($_SESSION['statuss'] === 'staff'){
                        header("location:staffdashboard.php?pwd=DbDown");
                    } else if($_SESSION['statuss'] === 'admin'){
                        header("location:dashboard.php?pwd=DbDown");
                    }
                    
                }


                // $items = [];
                // if ($result->num_rows > 0){
                //     while ( $row = $result->fetch_assoc()){
                //         $items[] = $row;
                //     }
                //     return $items;
                // }
            }



            function getPayment($id){
                $sql = "SELECT amount, purpose, paidOn, usersz From salary JOIN userz1 ON salary.usersz=userz1.id WHERE salary.usersz=$id";
                $result = $this->conns->query($sql);
                $items = [];
                if ($result->num_rows > 0){
                    while ( $row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }


            function countOrders($id){

                $sql = "SELECT usersz, purpose, sum(salary.amount) as amount, userz1.pPhoto, userz1.lnamez FROM salary JOIN userz1 ON salary.usersz=userz1.id WHERE usersz=$id";
                $result = $this->conns->query($sql);
    
                $items = [];
                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
                        $items[] = $rows;
                        
                    }
                    return $items;
                }
            }



        }