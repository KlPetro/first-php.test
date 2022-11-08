<?php
  $twits = getAllTwitsByUser(getUserID());
?>

<ul id="listTwits">
  <?php while($row = $twits->fetch_assoc()): ?>
    <li><?php echo $row['twit'];?></li>
  <?php endwhile; ?>
</ul>
