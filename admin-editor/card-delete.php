<?php
  require '../functions/connect.php';

  $id = $_POST['id'];
  $sql = "DELETE FROM goods WHERE id='{$id}'";

  $result = $connect->query($sql);
  header("Location:../admin-pages/card-admin-component.php?item=1");
?>