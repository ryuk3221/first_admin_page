<?php
  require '../functions/connect.php';
  session_start();

  //Выполняю запрос для получаения данных секии  баннера
  $sql = "SELECT * FROM about_section";
  $result = $connect->query($sql);

  $row = $result->fetch_assoc();

  //Записываю в сессию индекс активной ссылки, по этому индексу буду вешать активынй класс ссылкам в сайдбаре
  //P.s. не придумал способа лучше как это реализовать
  $_SESSION['current-link'] = 2;
  
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
        <h1 class="admin-page__title">Редактированиt секции "О нас"</h1>
        <div class="form-box">
          <form action="../admin-editor/about-edit.php" method="POST" name="about" enctype="multipart/form-data">
            <div class="input-box">
              <h5 class="input-box__title">Заголовок</h5>
              <input type="text" name="title" value='<?php echo $row["title"]?>'>
            </div>
            <div class="input-box">
              <h5 class="input-box__title">Подзаголовок</h5>
              <input type="text" name="sub_title" value='<?php echo $row["sub_title"]?>'>
            </div>
            <div class="input-box">
              <h5 class="input-box__title">Текст</h5>
              <input type="text" name="text" value='<?php echo $row["text"]?>'>
            </div>
            <div class="input-box">
              <h5 class="input-box__title">Картинка</h5>
              <input type="file" name="img">
            </div>
            <div class="current-img-box">
              Текущая картинка:
              <img src='../images/<?php echo $row['file_name']?>'>
            </div>
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