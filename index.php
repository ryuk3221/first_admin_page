<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="css/style.min.css">
  <title>Home page</title>
</head>
<body>
  <header class="header">
    <div class="container-one">
      <div class="header-top">
        
        <a href="" class="header-top__logo-link">
          <img class="header-top__logo-img" src="images/logo.svg" alt="">
        </a>
        <div class="header-top__box">
          <nav class="header-top__nav">
            <ul class="menu">
              <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
              <li class="menu__item"><a class="menu__link" href="#about">About</a></li>
              <li class="menu__item"><a class="menu__link" href="#service">Service</a></li>
              <li class="menu__item"><a class="menu__link" href="#catalog">Furniture</a></li>
              
            </ul>
          </nav>
          <button class="header-top__btn">Order Now</button>
        </div>
        <button class="header-top__search-btn">
          <img class="header-top__search-icon" src="images/search.svg" alt="">
        </button>
        <button class="header-top__burger" id="burger">
          <span class="burger-span1"></span><span class="burger-span2"></span><span class="burger-span3"></span>
        </button>
      </div>
    </div>
    
  </header>
  <main class="main">

    <?php require_once "./sections/header-content.php"?>

    <div class="benefits">
      <div class="benefits__inner">
        <div class="benefits__item">
          <span class="benefits__head">120 k</span>
          <span class="benefits__text">Furniture Sale</span>
        </div>
        <div class="benefits__item">
          <span class="benefits__head">98 k</span>
          <div class="benefits__box">
            <span class="benefits__text">Review</span>
            <img class="benefits__review-icon" src="images/star.svg" alt="">
            <span class="benefits__text">(4.5)</span>
          </div>
        </div>
        <div class="benefits__item">
          <span class="benefits__head">125</span>
          <span class="benefits__text">Furniture Categories</span>
        </div>
      </div>
    </div>
    
    <?php require_once "./sections/about.php"?>

    <section class="services" id="service">
      <div class="container">
        <h1 class="services__title">We provide that service</h1>
        <h4 class="services__subtitle subtitle">It is a long established fact that a reader will be distracted by the service.</h4>
        <div class="services__inner">
          <div class="services__item">
            <img class="services__item-icon" src="images/delevary.png" alt="">
            <h6 class="services__item-title">Free Delevary</h6>
            <p class="services__item-text">
              It is a long established fact that a reader will be the service.
            </p>
          </div>
          <div class="services__item">
            <img class="services__item-icon" src="images/guarnatee.png" alt="">
            <h6 class="services__item-title">100% Guarnatee</h6>
            <p class="services__item-text">
              It is a long established fact that a reader will be the service.
            </p>
          </div>
          <div class="services__item">
            <img class="services__item-icon" src="images/quality.png" alt="">
            <h6 class="services__item-title">Best Quality</h6>
            <p class="services__item-text">
              It is a long established fact that a reader will be the service.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Подключаю секцию с товарами -->
    <?php require_once('./sections/goods.php');?>

    <section class="reviews">
      <div class="container">
        <h1 class="reviews__title">What say clients about us</h1>
        <h4 class="reviews__subtitle subtitle">It is a long established fact that a reader will be distracted by the service.</h4>
        <div class="reviews__inner">
          
          <div class="reviews__item">
            <div class="reviews__item-inner">
              <div class="reviews__img-box">
                <img class="reviews__img" src="images/review-icon1.jpg" alt="">
              </div>
              <div class="reviews__item-content">
                <h6 class="reviews__item-title">Mr. Jone Ambrose</h6>
                <span class="reviews__item-date">20 - 07 - 21</span>
                <p class="reviews__item-text">
                  <span>“</span>Lorem Ipsum has been the industry by standard dummy text ever to since the 1500s, it’s  type and scrambled it to make a type specimen book. It’s has survived not only five.<span>”</span>
                </p>
                <div class="rateyo" ></div>
              </div>
            </div>
          </div>

          <div class="reviews__item">
            <div class="reviews__item-inner">
              <div class="reviews__img-box">
                <img class="reviews__img" src="images/review-icon2.jpg" alt="">
              </div>
              <div class="reviews__item-content">
                <h6 class="reviews__item-title">Mr. Jone Ambrose</h6>
                <span class="reviews__item-date">20 - 07 - 21</span>
                <p class="reviews__item-text">
                  <span>“</span>Lorem Ipsum has been the industry by standard dummy text ever to since the 1500s, it’s  type and scrambled it to make a type specimen book. It’s has survived not only five.<span>”</span>
                </p>
                <div class="rateyo" data-rateyo-rating="4"></div>
              </div>
            </div>
          </div>

          <div class="reviews__item">
            <div class="reviews__item-inner">
              <div class="reviews__img-box">
                <img class="reviews__img" src="images/review-icon1.jpg" alt="">
              </div>
              <div class="reviews__item-content">
                <h6 class="reviews__item-title">Mr. Jone Ambrose</h6>
                <span class="reviews__item-date">20 - 07 - 21</span>
                <p class="reviews__item-text">
                  <span>“</span>Lorem Ipsum has been the industry by standard dummy text ever to since the 1500s, it’s  type and scrambled it to make a type specimen book. It’s has survived not only five.<span>”</span>
                </p>
                <div class="rateyo" data-rateyo-rating="4"></div>
              </div>
            </div>
          </div>

          <div class="reviews__item">
            <div class="reviews__item-inner">
              <div class="reviews__img-box">
                <img class="reviews__img" src="images/review-icon2.jpg" alt="">
              </div>
              <div class="reviews__item-content">
                <h6 class="reviews__item-title">Mr. Jone Ambrose</h6>
                <span class="reviews__item-date">20 - 07 - 21</span>
                <p class="reviews__item-text">
                  <span>“</span>Lorem Ipsum has been the industry by standard dummy text ever to since the 1500s, it’s  type and scrambled it to make a type specimen book. It’s has survived not only five.<span>”</span>
                </p>
                <div class="rateyo" data-rateyo-rating="4"></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer__inner">

        <div class="footer__item">
          <a href="#" class="footer__logo-link">
            <img class="footer__logo-img" src="images/footer-logo.svg" alt="">
          </a>
          <div class="footer__contact">
            <div class="footer__contact-box">
              <a class="footer__phone-link" href="#">
                <img class="footer__phone-img" src="images/phone-icon.svg" alt="">
              </a>
              <a class="footer__phone" href="#">+8801760-007083</a>
            </div>
            <div class="footer__contact-box">
              <a class="footer__email-link" href="#">
                <img class="footer__email-img" src="images/mail-icon.svg" alt="">
              </a>
              <a class="footer__email" href="">uiuxmdomith@gmail.com</a>
            </div>
          </div>
          <div class="footer__social">
            <a class="footer__social-link" href="#">
              <img class="footer__social-img" src="images/footer-facebook.svg" alt="">
            </a>
            <a class="footer__social-link" href="#">
              <img class="footer__social-img" src="images/footer-inst.svg" alt="">
            </a>
            <a class="footer__social-link" href="#">
              <img class="footer__social-img" src="images/footer-twitter.svg" alt="">
            </a>
            <a class="footer__social-link" href="#">
              <img class="footer__social-img" src="images/linkedin.svg" alt="">
            </a>
          </div>
        </div>
        
        <div class="footer__item">
          <h3 class="footer__item-title">Usefull Links</h3>
          <ul class="footer__menu">
            <li class="footer__menu-item"><a class="footer__menu-link" href="#">Home</a></li>
            <li class="footer__menu-item"><a class="footer__menu-link" href="#">Abot Us</a></li>
            <li class="footer__menu-item"><a class="footer__menu-link" href="#">Service</a></li>
            <li class="footer__menu-item"><a class="footer__menu-link" href="#">Furniture</a></li>
          </ul>
        </div>

        <div class="footer__item">
          <h3 class="footer__item-title">FAQ</h3>
          <ul class="footer__faq">
            <li class="footer__faq-item"><a class="footer__faq-link" href="#">Lorem Ipsum Dolar</a></li>
            <li class="footer__faq-item"><a class="footer__faq-link" href="#">Lorem Ipsum Dolar</a></li>
            <li class="footer__faq-item"><a class="footer__faq-link" href="#">Lorem Ipsum Dolar</a></li>
            <li class="footer__faq-item"><a class="footer__faq-link" href="#">Lorem Ipsum Dolar</a></li>
          </ul>
        </div>

        <div class="footer__item">
          <h3 class="footer__item-title">Newsletter</h3>
          <form class="footer__form" action="">
            <input class="footer__input" type="text" placeholder="Enter your mail">
            <button class="footer__form-btn" type="submit">Send</button>
          </form>
          <button class="footer__btn">Download App</button>
        </div>

      </div>
    </div>
  </footer> 
  
  <script src="js/main.min.js" type="module"></script>
  <script>
    const fetchTodos = async () => {
      const res = await fetch('http://firstadminpanel/admin-page.php');
      const data = await res.json();
      console.log(data);
    };

    fetchTodos();
  </script>
</body>
</html>