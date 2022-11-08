<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

  $user_id = $_POST['user_id'];
  $text = $_POST['twit'];

  $sql = "INSERT INTO `posts`(`twit`, `user_id`) VALUES ('" . $text . "', '" . $user_id . "')";

  if (mysqli_query($conn, $sql)) {
      echo "<li>$text</li>";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>
