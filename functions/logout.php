<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['isAuth']);
header('Location:../admin.php');
?>