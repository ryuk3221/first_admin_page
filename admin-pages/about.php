<?php
  require '../functions/connect.php';
  session_start();

  //Выполняю запрос для получаения данных секии  баннера
  $sql = "SELECT * FROM about_section";
  $result = $connect->query($sql);

  $row = $result->fetch_assoc();
  
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

    <div class="admin-page__sidebar">
        <div class="admin-page__sideba-top-links">
          <a class="admin-page__home-link" href="../index.php">Вернуться на сайт</a>
          <a class="admin-page__logout-link" href="../functions/logout.php">Выйти</a>
        </div>
        <h4 class="sidebar__title">Редактирование:</h4>
        <div class="sidebar__links-box">
          <a class="sidebar__link" href="header-content.php">
            Верхний баннер
            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
            <path d="M0.441628 0.999383C0.333535 1.10751 0.272811 1.25414 0.272811 1.40703C0.272811 1.55992 0.333535 1.70655 0.441628 1.81468L3.29574 4.66879L0.441628 7.5229C0.336598 7.63165 0.278481 7.77729 0.279795 7.92847C0.281109 8.07965 0.341748 8.22427 0.448652 8.33117C0.555556 8.43808 0.700172 8.49872 0.851351 8.50003C1.00253 8.50134 1.14818 8.44323 1.25692 8.3382L4.51868 5.07644C4.62678 4.96831 4.6875 4.82168 4.6875 4.66879C4.6875 4.5159 4.62678 4.36927 4.51868 4.26114L1.25692 0.999383C1.1488 0.89129 1.00217 0.830566 0.849276 0.830566C0.696386 0.830566 0.549755 0.89129 0.441628 0.999383Z" fill="white"/>
            </svg>
          </a>
          <a class="sidebar__link sidebar__link--active">
            Секция "О нас"
            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
            <path d="M0.441628 0.999383C0.333535 1.10751 0.272811 1.25414 0.272811 1.40703C0.272811 1.55992 0.333535 1.70655 0.441628 1.81468L3.29574 4.66879L0.441628 7.5229C0.336598 7.63165 0.278481 7.77729 0.279795 7.92847C0.281109 8.07965 0.341748 8.22427 0.448652 8.33117C0.555556 8.43808 0.700172 8.49872 0.851351 8.50003C1.00253 8.50134 1.14818 8.44323 1.25692 8.3382L4.51868 5.07644C4.62678 4.96831 4.6875 4.82168 4.6875 4.66879C4.6875 4.5159 4.62678 4.36927 4.51868 4.26114L1.25692 0.999383C1.1488 0.89129 1.00217 0.830566 0.849276 0.830566C0.696386 0.830566 0.549755 0.89129 0.441628 0.999383Z" fill="white"/>
            </svg>
          </a>
        </div>
      </div>

      <div class="admin-page__content">
        <h1 class="admin-page__title">Редактированиt секции "О нас"</h1>
        <div class="form-box">
          <form action="../admin-editor/about-edit.php" method="POST" name="about">
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