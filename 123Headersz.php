<?php 


session_start();
$status = $_SESSION['statuss'];

require("getDeets.php");
$cren = new staff;

// if (!isset( $_SESSION['Crenet']) || $status === 'staff') {
//     header("location:../index.php");
// }

$id = $_SESSION['id'];
$name = $_SESSION['fnamez']." ".$_SESSION['lnamez'];
$users = $_SESSION['crenet'];
$pics = $_SESSION['pic'];
$status = $_SESSION['statuss'];

// $cren->getDeeets($id);
// $staffdeat = $cren->getDeeets($id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/crenet/CSS/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row divsd">
            <div class="col-12">
                <nav class="navbar navbar-expand">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Contact</a>
                                </li>
                                <?php if(isset($users)){ ?>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link">Log out</a>
                                </li>
                                <?php }else{} ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>