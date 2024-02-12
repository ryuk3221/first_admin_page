<?php
  require_once "../functions/connect.php";

  $updated_title = $_POST['title'];
  $updated_text = $_POST['text'];

  $sql = "UPDATE header_content SET title='{$updated_title}', text='{$updated_text}'";
  $result = $connect->query($sql);
  header('Location:../admin-pages/header-content.php');
?>