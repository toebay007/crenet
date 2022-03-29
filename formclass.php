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


}   else if(isset($_POST["subPwds"]) && isset($_GET["id"])){

  require("getDeets.php");

  $obj3 = new staff;

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $id = $_GET['id']; 
    $oldPwd1 = test_input($_POST['oldPwd1']);
    $newPwd12 = test_input($_POST['newPwd12']);
    $newPwd13 = test_input($_POST['newPwd13']);
    //echo $id;
    
    $obj3->changePwd($id,$oldPwd1,$newPwd12,$newPwd13);


}  else if(isset($_POST["salaMit"])){

  require("create.php");

  $obj5 = new userzs;

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $staffsz = test_input($_POST['staffsz']);
    $amount = test_input($_POST['amount']);
    $salary = test_input($_POST['salary']);
   // echo $salary;
     $obj5->salary($staffsz,$amount,$salary);


} 