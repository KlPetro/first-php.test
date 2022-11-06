   <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User list
                              <a href="?page=add" class="btn btn-info btn-sm"><i class="fas fa-user-plus"> </i> User</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php

                                  $sql = "SELECT * FROM users WHERE id !=" . $userID;
                                  //$result = $conn->query($sql);
                                  $result = mysqli_query($conn, $sql);
                                  while($row = $result->fetch_assoc())
                                  {
                                ?>
                                        <tr>
                                              <td><?php echo $row['id']; ?></td>
                                              <td><?php echo $row['username']; ?></td>
                                              <td><?php echo $row['email']; ?></td>
                                              <td><?php echo $row['role']; ?></td>
                                              <td>
                                                  <a href="?page=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pen"></i> Edit</a>
                                                  <a href="/admin/modules/users/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                                              </td>
                                        </tr>
                                <?php
                                  }
                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
