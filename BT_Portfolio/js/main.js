// menu
const menu = document.querySelector(".navbar__links");
const menubutton = document.querySelector(".navbar__icons");

// menubutton.addEventListener('click', function() {
//     menu.classList.toggle("navbar__open"); 
//     menubutton.classList.toggle("open");
// });

function showmenu() {
    menu.classList.toggle("navbar__open");
    menubutton.classList.toggle("open");
};