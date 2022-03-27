<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/simple-adaptive-slider.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@1,400;1,500;1,600;1,700&family=Roboto:wght@100;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style/style.css" />
    <title>page detail models</title>
  </head>
  <body>
    <?php require("header.php") ?>

    <div class="container">
      <div class="detail">
        <div class="detail__slider">
          <div class="prev">
            <img src="img/arrow.png" alt="" />
          </div>

          <div class="window">
            <div class="gallery">
              <div class="images">
                <img src="img/IMG_0924.JPEG" alt="" />
              </div>
              
              <div class="images">
                <img src="img/IMG_1464.JPG" alt="" />
              </div>

              <div class="images">
                <img src="img/IMG_0924.JPEG" alt="" />
              </div>

              <div class="images">
                <img src="img/IMG_1464.JPG" alt="" />
              </div>

              <div class="images">
                <img src="img/IMG_0924.JPEG" alt="" />
              </div>

              <div class="images">
                <img src="img/IMG_1464.JPG" alt="" />
              </div>

              <div class="images">
                <img src="img/IMG_0924.JPEG" alt="" />
              </div>

              <div class="images">
                <img src="img/IMG_1464.JPG" alt="" />
              </div>

              <div class="images">
                <img src="img/IMG_0924.JPEG" alt="" />
              </div>

              <div class="images">
                <img src="img/IMG_1464.JPG" alt="" />
              </div>
            </div>
          </div>

          <div class="next"><img src="img/arrow.png" alt="" /></div>
        </div>

        <ul class="information-model">
          <li>
            <div class="name">Игорь</div>
            <div class="surname">Василий</div>
            <div class="city">Бишкек</div>
          </li>

          <li>
            <div class="title">Категория</div>
            <div class="text">Девушки, Модели</div>
          </li>

          <li>
            <div class="title">РОСТ</div>
            <div class="figure">164 см</div>
          </li>

          <li>
            <div class="title">ТАЛИЯ (90/*/90)</div>
            <div class="figure">83/60/93</div>
          </li>

          <li>
            <div class="title">ЗНАНИЕ ЯЗЫКОВ</div>
            <div class="text">русский; английский</div>
          </li>

          <li>
            <div class="eyes">
              <div class="title">ГЛАЗА</div>
              <div class="color"></div>
            </div>

            <div class="hair">
              <div class="title">ВОЛОСЫ</div>
              <div class="color"></div>
            </div>

            <div class="shoes">
              <div class="title">ОБУВЬ</div>
              <div class="figure">37</div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <?php require("footer.php") ?>

    <script src="js/detail-slider.js"></script>
  </body>
</html>
