let btn = document.querySelector('.header-burger');

// console.log(btn);

function mobileMenu() {
    let menu = document.querySelector('.mobile-menu');
    console.log(menu);
    menu.classList.toggle('show-mobile-menu');
}

btn.addEventListener("click", mobileMenu);