const open = document.getElementById('menu-show');
const close = document.getElementById('menu-close');
const nav = document.getElementById('nav-toggle');

open.addEventListener('click', function() {
    nav.style.transform = 'scaleX(1)';
});

close.addEventListener('click', function() {
    nav.removeAttribute('style');
});