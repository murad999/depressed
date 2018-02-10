<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 5/1/2017
 * Time: 11:31 PM
 */
// session_start();

// include_once ("libs/config.php");
// include_once ("libs/Database.php");
// include_once ("libs/functions.php");

// $db = new Database();

// $query = "SELECT * FROM posts ORDER BY id DESC";

// $posts= $db->select($query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dipression Test</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/mycss.css" rel="stylesheet">

</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <div class="col-md-4"><img src="assets/images/logo2.png" width="150px" height="40px"></div>
        <nav class="blog-nav pull-right">
            <a class="blog-nav-item" href="index.php">Home</a>
            <a class="blog-nav-item" href="aboutus.php">About Us</a>
            <a class="blog-nav-item" href="useful.php">All abouts Depression</a>
            <a class="blog-nav-item" href="doctor.php">Doctor's List</a>
            <a class="blog-nav-item" href="contact.php">Contact</a>
            <?php if(isset($_SESSION['email'])) : ?>
            <a class="blog-nav-item pull-right" href="admin/index.php">Admin Panel</a>
        <?php endif; ?>
        </nav>
    </div>
</div>

<div class="container">


    <div class="row">
