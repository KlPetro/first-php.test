<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<?php
  if(isLogin()){
    $user = getCurrentUser();
?>
  <h2>Hello, <?php echo $user ['username'];?></h2>

<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/twit.php');
?>









<?php
  } else {
?>
  <h2>Hello</h2>
<?php
  }
?>
<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php')
?>
