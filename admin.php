<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/admin.css">
  <title>Админ панель</title>
</head>
<body>
  <div class="wrapper">
    <div class="form-container">
    <form class="form" method="POST" action="functions/auth.php">
      <h1 class="form__title">Вход в админку</h1>
      <input type="text" name="login" placeholder="Введите логин" required>
      <input type="password" name="password" placeholder="Введите пароль" required>
      <?php session_start()?>
      <?php if (!$_SESSION['isAuth']) { echo "<p>неверно введен логин или пароль</p>"; } ?>
      <button type="submit">Войти</button>
    </form>
    </div>
  </div>
  
</body>
</html>