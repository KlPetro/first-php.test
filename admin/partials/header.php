<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

  session_start();

  $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;
  $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null;

  if($is_session || $is_cookie){

    $userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];

    $sql = "SELECT * FROM users WHERE id =" . $userID;
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();

      if($user['role'] != "admin"){
          header("Location: /login.php");
      }

    }else{
       header("Location: /login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/admin_style.css">
</head>
<body>
    <h1>Top</h1>
