<?php
  require_once '../functions/connect.php';

  $updated_title = $_POST['title'];
  $updated_sub_title = $_POST['sub_title'];
  $updated_text = $_POST['text'];

  // $sql = "UPDATE `about_section` SET `title`=`{$updated_title}";
  $sql = "UPDATE `about_section` SET `title`='{$updated_title}', `sub_title`='{$updated_sub_title}', `text`='{$updated_text}'";
  $result = $connect->query($sql);

  header('Location:../admin-pages/about.php');
  
?>