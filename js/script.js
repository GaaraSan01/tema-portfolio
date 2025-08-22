(function (){

    // Menu
    const btnMenu = document.querySelector(".mobile-menu");
    const menu = document.querySelector(".nav-content-mobile");

    btnMenu.addEventListener('click', () => {
        menu.classList.toggle("ativa");
    });

    // Acordeon
    const btnAcordeon = document.querySelectorAll('.acordeon');
    const acordeonContent = document.querySelectorAll('.acordeon-content');

    btnAcordeon.forEach((item, index) => {
        item.addEventListener('click', () => {
            acordeonContent[index].classList.toggle('ativa');
            item.classList.toggle('ativa');
        });
    });
})()