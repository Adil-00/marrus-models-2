const windowScreenWidth = window.screen.width;
const navMenu2 = document.querySelector(".header-fixed .down .nav-menu");

const headerFix = document.querySelector(".header-fixed");
const headerHeight = 242;

window.addEventListener("scroll", () => {
  const scrolly = window.scrollY;
  if (scrolly > headerHeight) return (headerFix.style.marginTop = "200px");

  headerFix.style.marginTop = "0";
  navMenu2.classList.add("d-none");
});

if (windowScreenWidth <= 768) {
  const menuBtn = document.querySelector(".header .mid .menu");
  const navMenu = document.querySelector(".header .down .nav-menu");

  menuBtn.addEventListener("click", () => {
    if (navMenu.classList.contains("d-none")) {
      navMenu.classList.remove("d-none");
      navMenu.style.height = 0;

      let i = 0;

      const animationOpen = () => {
        if (i >= 194) return;

        navMenu.style.height = `${i}px`;

        if (i <= 9) {
          navMenu.style.padding = `${i}px 0`;
        }

        i = i + 3;

        setTimeout(animationOpen, 0);
      };

      animationOpen();

      return;
    }

    let i = 194;

    const animationClose = () => {
      if (i <= 0) {
        navMenu.style.height = 0;
        navMenu.classList.add("d-none");
        return;
      }

      navMenu.style.height = `${i}px`;

      if (i <= 9) {
        navMenu.style.padding = `${i}px 0`;
      }

      i = i - 3;

      setTimeout(animationClose, 0);
    };

    animationClose();
  });
}

if (windowScreenWidth <= 768) {
  const menuBtn2 = document.querySelector(".header-fixed .top .menu");

  menuBtn2.addEventListener("click", () => {
    if (navMenu2.classList.contains("d-none")) {
      navMenu2.classList.remove("d-none");
      navMenu2.style.height = 0;

      let i = 0;

      const animationOpen = () => {
        if (i >= 194) return;

        navMenu2.style.height = `${i}px`;

        if (i <= 9) {
          navMenu2.style.padding = `${i}px 0`;
        }

        i = i + 3;

        setTimeout(animationOpen, 0);
      };

      animationOpen();

      return;
    }

    let i = 194;

    const animationClose = () => {
      if (i <= 0) {
        navMenu2.style.height = 0;
        navMenu2.classList.add("d-none");
        return;
      }

      navMenu2.style.height = `${i}px`;

      if (i <= 9) {
        navMenu2.style.padding = `${i}px 0`;
      }

      i = i - 3;

      setTimeout(animationClose, 0);
    };

    animationClose();
  });
}

const url = document.URL;

if ("https://marussmodels.ru/" !== url) {
  const headerMid = document.querySelector(".header .mid");

  headerMid.insertAdjacentHTML(
    "beforeend",
    `<a href="javascript:history.back()" class="back">Назад</a> `
  );
}
