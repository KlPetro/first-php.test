<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

if(!empty($_POST)){
   $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header("Location: index.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<main class="form-signin w-100 m-auto position-absolute top-50 start-50 translate-middle">
  <form action="#" method="POST">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingName" name="name" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php')
?>
