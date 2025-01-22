let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('.navbar-toggler');
    navbar.classList.toggle('active');
}
menuover.onclick = () => {
    menu.classList.toggle('.navbar-toggler');
    navbar.classList.toggle('active');
}