<?php

if(isset($_POST["submit"])){

    require("create.php");
    $obj1 = new userzs;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $fnamez = test_input($_POST['fnamez']);
      $lnamez = test_input($_POST['lnamez']);
      $dob1 = test_input($_POST['dob1']);
      $terms = test_input($_POST['terms']);
      
     // echo $terms;
    //  print_r($_FILES);
      
     $obj1->regUser($fnamez,$lnamez,$dob1,$terms,$_FILES);

}   else if(isset($_POST["login"])){

    require("create.php");
  
    $obj2 = new userzs;
  
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  
      $username = test_input($_POST['username']);
      $password = test_input($_POST['password']);
      //echo $password;
      $obj2->stafflogin($username,$password);
}