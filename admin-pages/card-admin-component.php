<?php
  require '../functions/connect.php';
  session_start();


  //Записываю в сессию индекс активной ссылки, по этому индексу буду вешать активынй класс ссылкам в сайдбаре
  //P.s. не придумал способа лучше как это реализовать
  unset($_SESSION['current-link']);
  $_SESSION['current-card-link'] = $_GET['item'];
  
  $card_id = $_GET['item'];

  //Получаю с базы данных нужный товар по id передающийся get параметром
  $get_card_sql = "SELECT * FROM goods WHERE id='{$card_id}'";
  $card_data = $connect->query($get_card_sql);
  //Получил данные в виде ассоциативного массива
  $card_data = $card_data->fetch_assoc();
  
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
        <h1 class="admin-page__title">Редактированиt карточки товара "<?php echo $card_data['title']?>"</h1>
        <div class="form-box">

          <!-- Данная форма отправляется для  редактирования существующей -->
          <form action="../admin-editor/card-update.php" method="POST" name="about" enctype="multipart/form-data">
            <input style="display: none;" type="text" name="id" value='<?php echo $card_data['id']?>'>
            <div class="input-box">
              <h5 class="input-box__title">Название товара</h5>
              <input type="text" name="title" value='<?php echo $card_data['title']?>'>
            </div>
            <div class="input-box">
              <h5 class="input-box__title">Цена</h5>
              <input type="text" name="price" value='<?php echo $card_data['price']?>'>
            </div>
            <div class="input-box">
              <h5 class="input-box__title">Текст</h5>
              <input type="text" name="text" value='<?php echo $card_data['text']?>'>
            </div>
            <div class="input-box">
              <h5 class="input-box__title">Текущая картинка</h5>
              <div class="current-img-box">
                <img class="card-current-img" src='../images/<?php echo $card_data['file_name']?>' alt="">
                <span>Изменить картинку:</span>
                <input class="current-img-input" type="file" name="img" value='<?php echo $card_data['id']?>'>
              </div>
            </div>
            <button class="form-btn" type="submit">Сохранить</button>
          </form>

          <!-- Данная форма отправляется для удаления товара по id  -->
          <form action="../admin-editor/card-delete.php" method="post">
            <input style="display: none;" type="text" name="id" value='<?php echo $card_data['id']?>'>
            <button class="btn-remove-card">Удалить</button>
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