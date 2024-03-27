<?php
  require '../functions/connect.php';

  $added_title = $_POST['title'];
  $added_price = $_POST['price'];
  $added_text = $_POST['text'];
  $file_name = $_FILES['card-img']['name'];
  
  
  $sql = "INSERT INTO `goods` 
    (`id`, `title`, `price`, `text`, `file_name`) VALUES 
    (NULL, '{$added_title}', '{$added_price}', '{$added_text}', '{$file_name}')";

  $result = $connect->query($sql);

  move_uploaded_file($_FILES['card-img']['tmp_name'], 'C:\OSPanel\domains\firstAdminPanel\images\\' . $file_name);

  header('Location:../admin-pages/admin-page.php');
?>