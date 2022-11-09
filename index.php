<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>




 <?php
  if(isLogin()){
    $user = getCurrentUser();
?>
  <div class="container-sm">
    <?php
      require($_SERVER['DOCUMENT_ROOT'] . '/partials/twit.php');
      require($_SERVER['DOCUMENT_ROOT'] . '/partials/all-twits.php');
    ?>

    <?php
      } else { require($_SERVER['DOCUMENT_ROOT'] . '/partials/all-twits.php');}
    ?>

  </div>

<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php')
?>
