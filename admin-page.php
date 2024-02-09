<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/admin.css">
  <title>Document</title>
</head>
<body class="admin-page">
  <?php if ($_SESSION['isAuth'] == true):?>
    <div class="admin-page__wrapper">
      <div class="admin-page__sidebar">
        <a class="admin-page__home-link" href="./index.php">Вернуться на сайт</a>
      </div>
      <div class="admin-page__content">
      <h1 class="admin-page__title">Добро пожаловать <?php echo $_SESSION['login'];?>!</h1>
      </div>
    </div>
  <?php else: ?>
    <h2>Вы не авторизованы</h2>
    <a href="/admin.php">Назад</a>
  <?php endif?>  
</body>
</html>