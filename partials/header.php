<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

session_start();

?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body style="background: #e0e0e0">

  <?php
    if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null){
      echo '<a href="logout.php">Logout </a>';
      echo '<a href="/admin"> Admin</a>';


    }else if(isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null){
      echo '<a href="logout.php">Logout </a>';
      echo '<a href="/admin"> Admin</a>';
    } else {
  ?>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
  <?php
    }
  ?>
