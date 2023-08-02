let dropdown = document.querySelector('.menu'),
    submenu = document.querySelector('.sub-menu'),
    buttonClick = document.querySelector('.check-button'),
    hamburguer = document.querySelector('.menu-icon');


buttonClick.addEventListener('click', () => {
    dropdown.classList.toggle('show-dropdown');

    if (submenu) {
        submenu.classList.toggle('show-dropdown');
    }

    hamburguer.classList.toggle('animate-button');
});

