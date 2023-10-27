AOS.init();

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

//
document.getElementById('order-cargo_from_location').addEventListener('change', function () {
    // const add_city = document.getElementById('add_city');
    var num = $('#order-cargo_from_location option').length;
    var last_id = $('#order-cargo_from_location option:last').val();

    console.log(last_id, num)
    // if (last_id == this.value) {
    //     add_city.style = 'display:block'
    // }

});
// document.getElementById('my_country_to').addEventListener('change', function () {
//     const add_city = document.getElementById('add_city_to');
//     var last_id = $('#my_country_to option:last').val();
//
//     if (last_id == this.value) {
//         add_city.style = 'display:block'
//     }
// });
