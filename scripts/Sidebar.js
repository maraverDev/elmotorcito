document.addEventListener("DOMContentLoaded", function () {
  var menu = document.querySelector(".menu");
  var sidebar = document.querySelector(".sidebar");
  var retroceder = document.querySelector(".retroceder");

  menu.addEventListener("click", function () {
    sidebar.classList.add("active");
  });

  retroceder.addEventListener("click", function () {
    sidebar.classList.remove("active");
  });
});
