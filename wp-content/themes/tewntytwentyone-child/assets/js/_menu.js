document.addEventListener("DOMContentLoaded", (event) => {
  let menuButton = document.querySelector('.menu-burger');
  let menuContainer = document.querySelector('.menu-container');

  menuButton.addEventListener('click', function () {
    menuButton.classList.toggle('active');
    menuContainer.classList.toggle('show');
  })
})