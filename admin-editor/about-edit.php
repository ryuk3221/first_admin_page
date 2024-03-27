<?php
  require_once '../functions/connect.php';
  var_dump($_FILES);

  $updated_title = $_POST['title'];
  $updated_sub_title = $_POST['sub_title'];
  $updated_text = $_POST['text'];
  $updated_img = $_POST['img'];

  // $sql = "UPDATE `about_section` SET `title`=`{$updated_title}";
  $sql = "UPDATE `about_section` SET `title`='{$updated_title}', `sub_title`='{$updated_sub_title}', `text`='{$updated_text}', `file_name`='{$updated_img}'";
  $result = $connect->query($sql);


  // header('Location:../admin-pages/about.php');
  
?>