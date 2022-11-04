<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

?>

<?php
  if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null){
    $sql = "SELECT * FROM users WHERE id =" . $_SESSION["user_id"];
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();
?>
  <h2>Hello, <?php echo $user['username'] ?> </h2>
 
<?php
  } else {
?>

<h2>Hello</h2>
<?php } ?>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php')
?>
