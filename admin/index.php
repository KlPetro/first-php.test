<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
  require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/header.php');

  $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;
  $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null;

  if($is_session || $is_cookie){

    $userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];

    $sql = "SELECT * FROM users WHERE id =" . $userID;
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();

      if($user['role'] != "admin"){
          header("Location: /login.php");
      }

    }else{
       header("Location: /login.php");
    }

?>

<form action="add_user.php" method="POST">
<label>Name:<input type="text" name="name"></label><br>
<label>Email:<input type="text" name="email"></label><br>
<button>Save</button>
</form>


<?php
$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>
<table id="customers">
      <tr>
    <th>ID</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Option</th>
  </tr>
<?php
    while($row = $result->fetch_assoc())
    {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td>
            <a href="./edit_user.php?id=<?php echo $row['id']; ?>">Edit</a>
            <button class="btnDelete" data-id="<?php echo $row['id']; ?>">Delete</button>
        </td>

    </tr>
<?php
    }
?>
</table>

<?php
require("partials/footer.php")
?>
