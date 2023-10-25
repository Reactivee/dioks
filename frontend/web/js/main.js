function myEmail() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck");
    // Get the output text
    var text = document.getElementById("email_input");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true) {
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

jQuery(function ($) {
    $("#phone").mask("(99) 999-9999");
});


const burger = document.querySelector('.burger');
const close_btn = document.querySelector('.close_btn');
const mobile_menu = document.querySelector('.mobile_menu');
const body = document.querySelector('body');
const overlay = document.querySelector('.overlay');
const nav_items_footer_link = document.querySelector('.nav_items_footer');

burger.addEventListener("click", function () {
    mobile_menu.classList.toggle("show");
    overlay.style = 'display:block'
});

close_btn.addEventListener("click", function () {
    mobile_menu.classList.toggle("show");
    overlay.style = 'display:none'
});
nav_items_footer_link.addEventListener("click", function () {
    mobile_menu.classList.toggle("show");
    overlay.style = 'display:none'
});

$('.js-preloader').preloadinator({
    scroll: false,
    minTime: 1000
});