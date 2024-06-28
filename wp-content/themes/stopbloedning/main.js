document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.main-menu .nav');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            menuToggle.classList.toggle('open'); // Also toggle a class on the menu button
            console.log('Menu toggle clicked'); // Check if the click event is firing
        });
    }
});
