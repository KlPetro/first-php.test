

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/twit.php');
  $twits = getAllTwitsByUser(getUserID());
?>

<ul id="listTwits" class="list-group container-sm">
  <?php while($row = $twits->fetch_assoc()): ?>
    <li class="list-group-item">
      <?php echo $row['twit'];?>
      <?php if($row['image'] != ""): ?>
        <img class="rounded float-start img-fluid img-thumbnail" max-width="200" src="/uploads/<?php echo $row['image'];?>">
      <?php endif ?>
    </li>
  <?php endwhile; ?>
</ul>
