

  <?php
  if(isLogin()){?>
  <div class="float-start">
  <?php
      echo '<a class="secondary fs-6 text-decoration-none" href="logout.php">Logout&nbsp&nbsp</a>';
      $user = getCurrentUser();
      if($user["role"]=="admin"){
      echo '<a class="fs-6 text-decoration-none" href="/admin"> Admin&nbsp&nbsp&nbsp</a>';} ?>
      </div>
      <h4 class="fs-4">Hello, <?php echo $user ['username'];?></h4>
      <?php
} else {

  ?>
  <div class="float-start">
    <a class="fs-6 text-decoration-none" href="login.php">Login&nbsp&nbsp</a>
    <a class="fs-6 text-decoration-none" href="register.php"> Register</a>
</div>
<h2 class="fs-3">Hello</h2>
  <?php
    }
  ?>

