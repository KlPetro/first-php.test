<?php

//==================================================================
//==================================================================
//Чи авторизований користувач

  function isLogin(){
    $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;
    $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null;
    if($is_session || $is_cookie){
      return true;
    } else {
      return false;
    }
  }
//==================================================================
//==================================================================
//Дані поточного авторизованого користувача
  function getCurrentUser(){

    global $conn;

    $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;
    $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null;
    if($is_session || $is_cookie){

      $userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
      $sql = "SELECT * FROM users WHERE id =" . $userID;

      $result = mysqli_query($conn, $sql);
      return $user = $result->fetch_assoc();
    } else {
      return null;
    }
  }
//==================================================================
//==================================================================
//ID поточного ористувача
  function getUserID(){
    $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;
    $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null;
    if($is_session || $is_cookie){
      return $userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
    } else {
      return 0;
    }
  }
//==================================================================
//==================================================================
//Twits поточного ористувача
  function getAllTwitsByUser($userID){

    global $conn;

    $sql = "SELECT * FROM posts WHERE user_id =" . $userID . " ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    return $user = $result;
  }

?>









<?php
 /* $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;
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
    } */



 /*  if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null){
    $sql = "SELECT * FROM users WHERE id =" . $_SESSION["user_id"];
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();
    echo $user['username'];
  } */
?>
