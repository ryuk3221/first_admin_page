<?php
  require_once "./functions/connect.php";

  $header_content_sql = "SELECT * FROM header_content";

  $result = $connect->query($header_content_sql);
  $row = $result->fetch_assoc();
?>

<div class="header-content">
      <div class="container-one">
        <div class="header-content__inner">
          <div class="header-content__social">
            <a class="header-content__social-link" href="#">
              <img class="header-content__social-icon facebook" src="images/facebook.svg" alt="">
            </a>
            <a class="header-content__social-link" href="#">
              <img class="header-content__social-icon" src="images/instageam.svg" alt="">
            </a>
            <a class="header-content__social-link" href="#">
              <img class="header-content__social-icon" src="images/twitter.svg" alt="">
            </a>
          </div>
          <div class="header-content__text-box">
            <h1 class="header-content__title"><?php echo $row['title'];?></h1>
            <p class="header-content__text">
              <?php echo $row['text'];?>
            </p>
            <button class="header-top__btn header-content__btn">Order Now</button>
          </div>
        </div>
      </div>
    </div>