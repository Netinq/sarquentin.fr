const menu = document.querySelector('#menu');
const close = document.querySelector('#closeMenu');
const menuItems = document.querySelectorAll('.menu-item');
const fullMenu = document.querySelector('#fullMenu');

menu.addEventListener('click', () => {
    fullMenu.style.display = "flex";
});

close.addEventListener('click', () => {
    fullMenu.style.display = "none";
});

Array.from(menuItems).forEach(item => {
    item.addEventListener('click', () => {
        fullMenu.style.display = "none";
    });
});
