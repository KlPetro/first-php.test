
<?php

if(!empty($_POST)){

    $sql = "UPDATE `users` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "' WHERE `users`.`id` = " . $_GET['id'] . ";";
if (mysqli_query($conn, $sql)) {
      echo "<h2>User updated... <a href='/admin/users.php'>Return</a></h2>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

$sql="SELECT * FROM users WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
$row=$result->fetch_assoc();
?>

<form action="?page=edit&id=<?php echo $_GET['id']; ?>" method="POST">
    <label>Name:<input type="text" name="name" value="<?php echo $row['username'] ?>"></label><br>
    <label>Email:<input type="text" name="email" value="<?php echo $row['email'] ?>"></label><br>
    <button>Save</button>
</form>

