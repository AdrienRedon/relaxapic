var $ = require("jquery");

require('../components/popup');

var $loginPopup = $('.login__popup');
var $signinPopup = $('.signin__popup');

$loginPopup.popup('#login__button');
$signinPopup.popup('#signin__button');

// intercept and make an ajax call
$loginPopup.on("submit", function(e) {
    e.preventDefault();
    console.log('login submited');
    $.ajax({
        url: 'login',
        method: 'POST',
        data: {
            'mail': $loginPopup.find('#login_mail').val(),
            'password': $loginPopup.find('#login_password').val()
        }
    }).done(function(data) {
        data = $.parseJSON(data);
        // wrong login or password
        if (data === false) {
            $loginPopup.find('.login__failed').html(data);
        }
        // correctly logged in
        else if (data === true) {
            $loginPopup.fadeOut(400);
        }
        // validation errors
        else {
            console.log(data);
        }
    });
    return false;
});

$signinPopup.on("submit", function(e) {
    e.preventDefault();
    $.ajax({
        url: 'signin',
        method: 'POST',
        data: {
            'mail': $signinPopup.find('#signin_mail').val(),
            'password': $signinPopup.find('#signin_password').val(),
            'password_confirm': $signinPopup.find('#signin_password_confirm').val()
        }
    }).done(function(data) {
        data = $.parseJSON(data);
        // correctly signed in
        if (data === true) {
            $signinPopup.fadeOut(400);
        }
        // validation errors
        else {
            console.log(data);
        }
    });
    return false;
});