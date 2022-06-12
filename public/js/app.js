let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', burgerMenu);

function burgerMenu() {
    body.classList.toggle('open');
}