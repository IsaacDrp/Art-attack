const openMenuBtn = document.getElementById("open-menu-btn");
const closeMenuBtn = document.getElementById("close-menu-btn");
const mainContainer = document.getElementById("main-container");
const navMenu = document.getElementById("nav-menu");

openMenuBtn.addEventListener('click', function() {
    mainContainer.style.display = "none";
    navMenu.style.display = "block"
});

closeMenuBtn.addEventListener('click', function() {
    mainContainer.style.display = "block";
    navMenu.style.display = "none"
});
