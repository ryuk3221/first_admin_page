<?php
  require '../functions/connect.php';

  $updated_title = $_POST['title'];
  $updated_price = $_POST['price'];
  $updated_text = $_POST['text'];
  $updated_id = $_POST['id'];

  $sql = "UPDATE goods 
    SET `title`='{$updated_title}', `price`='{$updated_price}', `text`='{$updated_text}'
    WHERE `id`='{$updated_id}'";
  
  $result = $connect->query($sql);

  header("Location:../admin-pages/card-admin-component.php?item={$updated_id}");
?>