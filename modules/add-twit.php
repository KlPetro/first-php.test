<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

  $user_id = $_POST['user_id'];
  $text = $_POST['twit'];

  $sql = "INSERT INTO `posts`(`twit`, `user_id`) VALUES ('" . $text . "', '" . $user_id . "')";

  if (mysqli_query($conn, $sql)) {
      echo "<li>$text</li>";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";

?>
