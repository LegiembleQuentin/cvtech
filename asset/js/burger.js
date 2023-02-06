const button = document.getElementById('burger-menu-button');
const menu = document.getElementById('burger-menu');
const closeButton = document.getElementById("close-menu-button");

button.addEventListener('click', () => {
    menu.classList.toggle('open');
});

closeButton.addEventListener("click", function() {
    menu.classList.remove("open");
});