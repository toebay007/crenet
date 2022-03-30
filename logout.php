<?php

session_start();


if (isset($_SESSION['statuss'])) {
	session_unset($_SESSION['statuss']);
	session_destroy();

}
	
 header("location:index.php?loggedout=success");


?>