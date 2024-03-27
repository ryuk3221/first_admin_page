<?php
session_start();
require '../functions/connect.php';

//Очищаю поля в сессиях для активных ссылок
unset($_SESSION['current-link']);
unset($_SESSION['current-card-link']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/admin.css">
  <title>Админка</title>
</head>
<body class="admin-page">
  <!-- Если пользователь авторизован отображаю содержимое админки -->
  <?php if ($_SESSION['isAuth'] == true):?>
    <div class="admin-page__wrapper">

    <?php require './sidebar.php'?>

      <div class="admin-page__content">
        <h1 class="admin-page__title">Добавление карточки</h1>
        <div class="form-box">
          <form action="../admin-editor/card-add.php" method="POST" enctype="multipart/form-data">
            <div class="input-box">
              <h5 class="input-box__title">Название товара</h5>
              <input type="text" name="title">
            </div>
            <div class="input-box">
              <h5 class="input-box__title">Цена</h5>
              <input type="text" name="price">
            </div>
            <div class="input-box">
              <h5 class="input-box__title">Текст</h5>
              <input type="text" name="text">
            </div>
            <input type="file" name="card-img">
            <button class="form-btn" type="submit">Отправить</button>
          </form>
        </div>
      </div> 

    </div>
  <!-- Если не авторизован -->
  <?php else: ?>
    <h2>Вы не авторизованы</h2>
    <a href="/admin.php">Назад</a>
  <?php endif?>  
</body>
</html>