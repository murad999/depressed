<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 5/1/2017
 * Time: 11:31 PM
 */

include_once ("../libs/config.php");
include_once ("../libs/Database.php");
include_once ("../libs/functions.php");

$db = new Database();



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

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/mycss.css" rel="stylesheet">


</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="index.php">Deshboard</a>
            <a class="blog-nav-item" href="add_post.php">Add question</a>
            <a class="blog-nav-item" href="about.php">Add about us</a>
            <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
            <a class="blog-nav-item pull-right" href="../index.php">View Site</a>
        </nav>
    </div>
</div>

<div class="container">
    
    <div class="row">
