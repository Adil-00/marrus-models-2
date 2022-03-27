const inputArr = document.querySelectorAll(".input input");
const selectArr = document.querySelectorAll(".input .select select");
const newArr = [];

inputArr.forEach((item) => {
  newArr.push(item);
});

selectArr.forEach((item) => {
  newArr.push(item);
});

newArr.forEach((item) => {
  item.addEventListener("focus", () => {
    if (item.parentNode.classList.contains("select")) {
      item.parentNode.classList.add("focus");
      return;
    }
    item.classList.add("focus");
  });

  item.addEventListener("blur", () => {
    if (item.parentNode.classList.contains("select")) {
      item.parentNode.classList.remove("focus");
      return;
    }
    item.classList.remove("focus");
  });
});
