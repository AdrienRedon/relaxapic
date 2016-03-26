var $ = require("jquery");

$('#login__button').on('click', function(e) {
    e.preventDefault();
    $('.login__popup').removeClass('hidden');
});

$('.login__popup').on('click', '.cancel__button', function() {
    $(this).parent().addClass('hidden');
});
