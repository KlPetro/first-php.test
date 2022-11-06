<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Post list
            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-plus"></i> Post</a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <?php

                $sql = "SELECT * FROM posts";
                $result = $conn->query($sql);
                //$result = mysqli_query($conn, $sql);
                while($row = $result->fetch_assoc()) {
                    $sql2="SELECT * FROM `users` WHERE `id` =" . $row['user_id'];
                    $result2 = mysqli_query($conn, $sql2);
                    $row2=$result2->fetch_assoc();
            ?>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	            <tbody>
                  <tr>
                      <i class="fas fa-user-circle"></i> <?php echo $row2['username'];?>
                      <i class="far fa-calendar-plus"></i> <?php echo $row['created']; ?></td>
                  </tr>
                  <tr><td><?php echo $row['twit']; ?></td></tr>
                  <tr>
                    <td>
                      <a href="#" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i> Edit</a>
                      <a href="#" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                     </td>
                  </tr>
                </tbody>
              </table>

            <?php
              }
            ?>
        </div>
    </div>
</div>
