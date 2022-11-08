<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

  $user_id = $_POST['user_id'];
  $text = $_POST['twit'];
  $imageName = '';
  if(!empty($_FILES)){                                            // Перевірка чи є файл
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';         // Папка для загрузки файлів
    $ext = pathinfo($_FILES['image']['name']);                    // Отримання розширення файла
    $imageName = generateRandomString(64) . time() . "." . $ext['extension'];// Отримання назви файла
    $uploadfile = $uploaddir . $imageName;

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
      echo "Возможная атака с помощью файловой загрузки!\n";
      die();
    }

    /* if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
      echo "Файл корректен и был успешно загружен.\n";
    } else {
      echo "Возможная атака с помощью файловой загрузки!\n";
    } */
  }

  $sql = "INSERT INTO `posts`(`twit`, `user_id`, `image`) VALUES ('" . $text . "', '" . $user_id . "', '" . $imageName . "')";

  if (mysqli_query($conn, $sql)) {

    $html = "<li>";
    $html .= $text;
    if($imageName != ''){
      $html .= "<img src='/uploads/$imageName'>";
    }
    $html .= "</li>";
    echo $html;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

//Функція генерування назви файлу
  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
