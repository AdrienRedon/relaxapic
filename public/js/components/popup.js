var $ = require("jquery");

$.fn.popup = function(button) {

    var $body = $('body');
    var $popup = this;
    var $overlay = $('.overlay');
    var cancel = '.cancel__button';

    /**
     * Overlay
     */

    $body.keyup(function(e){
        if(e.which == 27){
            $popup.addClass('hidden');
            $overlay.addClass('hidden');
        }
    });

    $overlay.click(function(e) {
        e.stopPropagation();
        $popup.addClass('hidden');
        $overlay.addClass('hidden');
    });

    /**
     * Popup
     */
    
    $body.on('click', button, function(e) {
        e.preventDefault();
        $popup.removeClass('hidden');
        $overlay.removeClass('hidden');
        $(":focusable:first-child").focus();
        return false;
    });

    $popup.on('click', cancel, function(e) {
        e.preventDefault();
        $popup.addClass('hidden');
        $overlay.addClass('hidden');
        return false;
    });

    return this;

};