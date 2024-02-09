<?php
  require ('./functions/connect.php');

  // Выполняю запросдля получаения всех товаров с бд
  $sql = "SELECT * FROM goods";
  $rows = $connect->query($sql);

?>

<section class="catalog" id="catalog">
      <div class="container">
        <h1 class="catalog__title">Our Furniture</h1>
        <h4 class="catalog__subtitle">It is a long established fact that a reader will be distracted by the service.</h4>
        <div class="catalog__head">
          <div class="catalog__search-box">
            <input class="catalog__search-input" placeholder="Search a furniture" type="text">
            <button class="catalog__search-btn"><img class="catalog__serach-icon" src="images/catalog-search.svg" alt=""></button>
          </div>
          <div class="swiper">
            <div class="catalog__filters swiper-wrapper">
              <button class="catalog__filter-btn swiper-slide" data-filter="all">All</button>
              <button class="catalog__filter-btn swiper-slide" data-filter=".chair">Chair</button>
              <button class="catalog__filter-btn swiper-slide" data-filter=".table">Table</button>
              <button class="catalog__filter-btn swiper-slide" data-filter=".bed">Bed</button>
              <button class="catalog__filter-btn swiper-slide" data-filter=".sofa">Sofa</button>
              <button class="catalog__filter-btn swiper-slide" data-filter=".wardrobe">Wardrobe</button>
              <button class="catalog__filter-btn swiper-slide" data-filter=".almirah">Almirah</button>
              <button class="catalog__filter-btn swiper-slide" data-filter=".dimple">Dimple</button>
              <button class="catalog__filter-btn swiper-slide" data-filter=".rack">Rack</button>
              <button class="catalog__filter-btn swiper-slide" data-filter=".stand">Stand</button>
            </div>
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
        <div class="catalog__inner">
          <?php foreach($rows as $row) { ?>
            <div class="catalog__item mix chair" >
              <a href="images/item1.jpg" data-fancybox="gallary1">
                <div class="catalog__img-box">
                  <img class="catalog__item-img" src="images/item1.jpg" alt="">
                </div>
              </a>
              <div class="catalog__item-head">
                <h6 class="catalog__item-title"><?php echo $row['title'];?></h6>
                <span class="catalog__item-price"><?php echo $row['price'];?></span>
              </div>
              <p class="catalog__item-text">
                <?php echo $row['text'];?>
              </p>
              <button class="catalog__item-btn">Order Now</button>
            </div>
          <?php }?>
          
        </div>
        <botton class="catalog__btn">View All</botton>
      </div>
    </section>