document.getElementById("ham_icon").addEventListener("click", menuToggle);
document.getElementById("sub_menu").addEventListener("click", toggleNav);
document.getElementById("sub_menu1").addEventListener("click", toggleNavLog);

function toggleNav() {
    var subItems = document.getElementById("myDropdown");

    if (subItems.className === "dropdown-menu") {
        subItems.className += "submenu";
        subItems.classList.toggle("show");

    } else {
        subItems.className = "dropdown-menu";
    }
}

function toggleNavLog() {
    var subItems1 = document.getElementById("myDropdown1");

    if (subItems1.className === "dropdown-menu") {
        subItems1.className += "submenu";
        subItems1.classList.toggle("show");

    } else {
        subItems1.className = "dropdown-menu";
    }
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide");

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";

}

function menuToggle() {
    var menu = document.getElementById("toggle_nav");
    if (menu.style.display == "none") {

        menu.style.display = "block";
    } else {
        menu.style.display = "none"
    }

}
