    <style>
@font-face {
  font-family: "ArialBlack";
  src: url("../fonts/RobotoRegular.woff");
}

      .slider {
        max-width: 100%;
        /* height: 370px; */

        margin-top: 20px;
      }

      .slider__item img {
        width: 100%;
        max-height: 370px;
        height: 100%;
      }

      .slider__control{
        opacity: 1;
        background: #000;
        width: 80px;
        height: 34px;
        font-family: "ArialBlack";
        font-size: 14px;
      }

      .slider__control::before {
        display: none;
      }
      
      .slider__indicator{
        height: 22px;
        background-color: #000;
      }

      .slider__indicator_active{
        background-color: #fff;
      }
    </style>

    <div class="container">
      <div class="slider">
        <div class="slider__wrapper">
          <div class="slider__items">
            <div class="slider__item">
              <img src="./img/IMG_0924.JPEG" alt="" />
            </div>
            <div class="slider__item">
              <img src="./img/IMG_0924.JPEG" alt="" />
            </div>
            <div class="slider__item">
              <img src="./img/IMG_0924.JPEG" alt="" />
    </div>
          </div>
        </div>
        <a
          class="slider__control slider__control_prev"
          href="#"
          role="button"
          data-slide="prev"
        >Previous</a>
        <a
          class="slider__control slider__control_next"
          href="#"
          role="button"
          data-slide="next"
        >Next</a>
      </div>
    </div>

    <script src="js/simple-adaptive-slider.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // инициализация слайдера
        var slider = new SimpleAdaptiveSlider(".slider", {
          autoplay: false,
          interval: 5000,
          swipe: true,
        });
      });
    </script>