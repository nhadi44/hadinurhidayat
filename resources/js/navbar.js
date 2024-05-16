let mobileMenu = document.getElementById("mobile_menu");
let offcanvas = document.getElementById("offcanvas");
let offcanvasClose = document.getElementById("offcanvas_btn_close");
let navbar = document.getElementById("navbar");

if (mobileMenu) {
    mobileMenu.addEventListener("click", function () {
        offcanvas.classList.remove("offcanvas__close");
        offcanvas.classList.add("offcanvas__open");
    });
}

if (offcanvasClose) {
    offcanvasClose.addEventListener("click", function () {
        offcanvas.classList.remove("offcanvas__open");
        offcanvas.classList.add("offcanvas__close");
    });
}

// detect scroll position
window.onscroll = function () {
    console.log(window.pageYOffset);
    if (window.pageYOffset > 100) {
        navbar.classList.add("navbar__scrolled");
        navbar.classList.remove("navbar__scrolled-out");
    } else {
        navbar.classList.remove("navbar__scrolled");
        navbar.classList.add("navbar__scrolled-out");
    }
};
