<?php
  require '../functions/connect.php';

  $updated_title = $_POST['title'];
  $updated_price = $_POST['price'];
  $updated_text = $_POST['text'];
  $updated_id = $_POST['id'];
  $updated_img = $_FILES['img']['name'];

  //Перемещаю файл в хранилище
  move_uploaded_file($_FILES['img']['tmp_name'], 'C:\OSPanel\domains\firstAdminPanel\images\\' . $updated_img);

  //Ниже будет скрипт который удаляет прошлую каритнку из хранилища

  $sql = "UPDATE goods 
    SET `title`='{$updated_title}', `price`='{$updated_price}', `text`='{$updated_text}', `file_name`='{$updated_img}'
    WHERE `id`='{$updated_id}'";
  
  $result = $connect->query($sql);

  header("Location:../admin-pages/card-admin-component.php?item={$updated_id}");
?>