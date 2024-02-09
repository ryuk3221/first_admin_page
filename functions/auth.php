<?php require_once '../functions/connect.php';

session_start();

$user_login = $_POST["login"];
$user_password = $_POST["password"];

$sql = "SELECT id, login, password FROM user WHERE login='{$user_login}'";

$result = $connect->query($sql);
$row = $result->fetch_assoc();

//Если пользователь найден и хэш пароля возвращает true
if ($row['id'] > 0 && password_verify($user_password, $row['password'])) {
  //Записываю в сессию логин
  $_SESSION['login'] = $row['login'];
  //Обозначаю в сессии что пользователь авторизован
  $_SESSION['isAuth'] = true;
  //Направляю на страницу админ панели
  header('Location:../admin-page.php');
} 
else {
  $_SESSION['isAuth'] = false;
  header('Location:../admin.php');
}
