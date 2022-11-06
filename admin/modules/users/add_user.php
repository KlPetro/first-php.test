
<?php
require ("../configs/db.php");

if(!empty($_POST)){
   echo $_POST['name'] . " - " . $_POST['email'];

   $sql = "INSERT INTO `users`(`username`, `email`) VALUES ('" . $_POST['name'] . "','" . $_POST['email'] . "')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header("Location: index.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}