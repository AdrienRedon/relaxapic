var $ = require("jquery");

/**
 * Overlay
 */

$('body').keyup(function(e){
    if(e.which == 27){
        $('.login__popup').addClass('hidden');
        $('.signin__popup').addClass('hidden');
        $('.overlay').addClass('hidden');
    }
});

$('.overlay').on('click', function(e) {
    e.stopPropagation();
    $('.login__popup').addClass('hidden');
    $('.signin__popup').addClass('hidden');
    $(this).addClass('hidden');
});

/**
 * Login
 */

$('#login__button').on('click', function(e) {
    e.preventDefault();
    $('.overlay').removeClass('hidden');
    $('.login__popup').removeClass('hidden');
});

$('.login__popup').on('click', '.cancel__button', function(e) {
    e.preventDefault();
    $(this).parent().addClass('hidden');
    $('.overlay').addClass('hidden');
});

/**
 * Signin
 */

$('#signin__button').on('click', function(e) {
    e.preventDefault();
    $('.overlay').removeClass('hidden');
    $('.signin__popup').removeClass('hidden');
});

$('.signin__popup').on('click', '.cancel__button', function(e) {
    e.preventDefault();
    $(this).parent().addClass('hidden');
    $('.overlay').addClass('hidden');
});