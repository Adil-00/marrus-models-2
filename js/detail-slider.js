let offset = 0;
const next = document.querySelector(".next");
const prev = document.querySelector(".prev");
const gallery = document.querySelector(".gallery");
const images = document.querySelectorAll(".images");
let width = 315;

const init = () => {
  gallery.style.width = width * images.length + "px";
};

init();

const handleGetWithWindow = () => {
  const screenWidth = window.screen.width;
  const sliderWindow = document.querySelector(".window").offsetWidth;

  if (sliderWindow < 630 || screenWidth < 820) {
    if (screenWidth < 481) {
      width = sliderWindow;

      init();

      console.log(screenWidth);
      return;
    }

    width = sliderWindow / 2;

    init();

    return;
  }

  width = 315;
};

handleGetWithWindow();

window.addEventListener("resize", () => {
  handleGetWithWindow();

  init();
});

next.addEventListener("click", () => {
  offset += width;

  if (Math.ceil(width * images.length) === Math.ceil(offset)) {
    offset = 0;
  }

  gallery.style.left = -offset + "px";
});

prev.addEventListener("click", () => {
  offset -= width;

  if (offset < 0) {
    offset = width * images.length;
  }

  gallery.style.left = -offset + "px";
});
