
<?php
require ("../configs/db.php");
require ("./partials/header.php");

if(!empty($_POST)){
  
    $sql = "UPDATE `users` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "' WHERE `users`.`id` = " . $_GET['id'] . ";";
if (mysqli_query($conn, $sql)) {
      echo "Update";
      header("Location: index.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

$sql="SELECT * FROM users WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
$row=$result->fetch_assoc();
?>

<form action="./edit_user.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <label>Name:<input type="text" name="name" value="<?php echo $row['username'] ?>"></label><br>
    <label>Email:<input type="text" name="email" value="<?php echo $row['email'] ?>"></label><br>
    <button>Save</button>
</form>


<?php
require ("./partials/footer.php");
?>