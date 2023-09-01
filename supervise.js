const display = document.querySelector(".uploadimg");
const input = document.querySelector("#upload");
let img = document.querySelector("img");

input.addEventListener("change", () => {
  let reader = new FileReader();
  reader.readAsDataURL(input.files[0]);
  reader.addEventListener("load", () => {
    display.innerHTML = `<img src=${reader.result}  style="width: 110px; height: 80px;" alt=''/>`;
  });
});