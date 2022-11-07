<?php

if(!empty($_POST)){

   $sql = "INSERT INTO `posts` (`twit`, `user_id`, `created`) VALUES ('" . $_POST['twit'] . "', '" . $userID . "', current_timestamp());";
if (mysqli_query($conn, $sql)) {
      echo "<h2>Post added... <a href='/admin/posts.php'>Return</a></h2>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">New post</h6>
    </div>
  <div class="card-body">


    <form action="?page=add" method="POST">
        <div class="form-floating">
          <textarea type="text" class="form-control" name="twit" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
          <label for="floatingTextarea"></label>
        </div>
      <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> Save</button>
    </form>

  </div>
</div>
