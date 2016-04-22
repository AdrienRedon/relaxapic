var $ = require("jquery");

require('../components/popup');

var $loginPopup = $('.login__popup');
var $signinPopup = $('.signin__popup');
var $logoutButton = $('#logout__button');
var $overlay = $('.overlay');

$loginPopup.popup('#login__button');
$signinPopup.popup('#signin__button');

// intercept and make an ajax call
$loginPopup.on("submit", function(e) {
    e.preventDefault();
    $.ajax({
        url: 'login',
        method: 'POST',
        data: {
            'mail': $loginPopup.find('#login_mail').val(),
            'password': $loginPopup.find('#login_password').val()
        }
    }).done(function(data) {
        data = $.parseJSON(data);

        // clear previous errors
        $loginPopup.find('.login__failed').html('');
        $loginPopup.find(".mail__errors").html('');
        $loginPopup.find(".password__errors").html('');

        // wrong login or password
        if (data.logged && data.logged === false) {
            $loginPopup.find('.login__failed').html('Les identifiants sont incorrects');
        }
        // correctly logged in
        else if (data.logged && data.logged === true) {
            $loginPopup.addClass('hidden');
            $overlay.addClass('hidden');
            $('.isNotLogged').addClass('hidden');
            $('.isLogged').removeClass('hidden');
        }
        // validation errors
        else {
            if (data.mail) {
                $loginPopup.find(".mail__errors").html(data.mail);
            }

            if (data.password) {
                $loginPopup.find(".password__errors").html(data.password);
            }
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

        //clear previous errors
        $signinPopup.find(".mail__errors").html('');
        $signinPopup.find(".password__errors").html('');
        $signinPopup.find(".password_confirm__errors").html('');

        // correctly signed in
        if (data.signed && data.signed === true) {
            $signinPopup.addClass('hidden');
            $overlay.addClass('hidden');
        }
        // validation errors
        else {
            if (data.mail) {
                $signinPopup.find(".mail__errors").html(data.mail);
            }

            if (data.password) {
                $signinPopup.find(".password__errors").html(data.password);
            }

            if (data.password_confirm) {
                $signinPopup.find(".password_confirm__errors").html(data.password_confirm);
            }
        }
    });
    return false;
});

$logoutButton.on("click", function(e) {
    e.preventDefault();
    $.ajax({
        url: 'logout',
        method: 'POST'
    }).done(function() {
        $('.isNotLogged').removeClass('hidden');
        $('.isLogged').addClass('hidden');
    });
});