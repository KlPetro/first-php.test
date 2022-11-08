<?php

if(!empty($_POST)){

    $sql = "UPDATE `posts` SET `twit` = '" . $_POST['twit'] . "'  WHERE `posts`.`id` = " . $_GET['id'] . ";";

if (mysqli_query($conn, $sql)) {
      echo "<h2>Post updated... <a href='/admin/posts.php'>Return</a></h2>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

$sql="SELECT * FROM posts WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
$row=$result->fetch_assoc();
$text=$row['twit'];
?>




<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit post</h6>
    </div>
  <div class="card-body container">


    <form action="?page=edit&id=<?php echo $_GET['id'];?>" method="POST">
        <div class="form-floating">
          <label for="floatingTextarea"></label>
          <textarea type="text" class="form-control" name="twit" placeholder="Leave a comment here"
          id="floatingTextarea"><?php echo $text; ?></textarea>

        </div>
      <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> Save</button>
    </form>

  </div>
</div>

