
<ul id="listTwits" class="list-group container-sm">
            <?php
                $sql = "SELECT * FROM posts ORDER BY id DESC";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) : ?>

            <li class="list-group-item">
                <?php echo $row['twit'];?>
                <?php if($row['image'] != ""): ?>
                  <img class="rounded float-start img-fluid img-thumbnail" max-width="200" src="/uploads/<?php echo $row['image'];?>">
                <?php endif ?>
            </li>
  <?php endwhile; ?>
</ul>
