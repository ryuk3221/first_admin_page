<?php
  require '../functions/connect.php';

  $added_title = $_POST['title'];
  $added_price = $_POST['price'];
  $added_text = $_POST['text'];

  $sql = "INSERT INTO `goods` 
    (`id`, `title`, `price`, `text`, `file_name`) VALUES 
    (NULL, '{$added_title}', '{$added_price}', '{$added_text}', '')";

  $result = $connect->query($sql);

  header('Location:../admin-pages/card-admin-component.php?item=1');
?>