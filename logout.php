<?php

session_start();


if (isset($_SESSION['usernamez'])) {
	session_unset($_SESSION['usernamez']);
	session_destroy();

}
	
 header("location:index.php?loggedout=success");


?>