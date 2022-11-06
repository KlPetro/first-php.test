
<?php

if(!empty($_POST)){

   $sql = "INSERT INTO `users`(`username`, `email`) VALUES ('" . $_POST['name'] . "','" . $_POST['email'] . "')";
if (mysqli_query($conn, $sql)) {
      echo "<h2>User added... <a href='/admin/users.php'>Return</a></h2>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">User list</h6>
    </div>
    <div class="card-body">

      <form action="?page=add" method="POST">
<div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" name="name" class="form-control" id="username" placeholder="Enter your name">
</div>
<div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="username" placeholder="Enter your email">
</div>
<div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
</div>

          <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> Save</button>
      </form>
    </div>
  </div>

