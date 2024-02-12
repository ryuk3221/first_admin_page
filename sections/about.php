<?php
  require './functions/connect.php';

  $sql = "SELECT * FROM `about_section`";
  $result = $connect->query($sql);
  $row = $result->fetch_assoc();
?>

<section class="about" id="about">
      <div class="container">
        <h1 class="about__title"><?php echo $row['title']?></h1>
        <h4 class="about__subtitle subtitle"><?php echo $row['sub_title']?></h4>
      </div>
      <div class="container-one">
        <div class="about__inner">
          <div class="about__img-box">
            <a href="images/about-img.jpg" data-fancybox><img class="about__img" src="images/about-img.jpg" alt=""></a>
          </div>
          <div class="about__content">
            <p class="about__text">
              <?php echo $row['text']?>
            </p>
            <button class="about__btn">More about us</button>
            <div class="about__partners">
              <div class="about__partners-img-box">
                <img class="about__partners-img" src="images/amazon.png" alt="">
              </div>
              <div class="about__partners-img-box">
                <img class="about__partners-img" src="images/alibaba.png" alt="">
              </div>
              <div class="about__partners-img-box">
                <img class="about__partners-img" src="images/circles.png" alt="">
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>