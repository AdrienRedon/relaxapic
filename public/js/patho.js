var $ = require("jquery");

$(function() {

    /**
     * Get typePatho
     */
    $.ajax({
        url: "getTypesPatho",
        method: 'get'
    }).done(function(response) {
        $container = $('.categories__container');
        $container.html(response);
    });

    /**
     * Get patho
     */

    $('body').on("click", ".drop", function() {
        var $container  = $(this).parent().parent();
        var $liste = $container.find('.pathologies__container');
        var $title = $(this).parent();
    	$.ajax({
    		url: "getListePatho/" + $(this).data('id'),
    		method: 'get'
    	}).done(function(response) {

            if ($title.hasClass('active')) {

                $title.removeClass('active');
                $liste.slideUp(300);

            } else {

                $liste.hide();
                $title.addClass('active');

                $liste.html(response);
                $liste.find('.pathology_info__container').hide();
                $liste.slideDown(300);
            }

    	});
    });

    /**
     * Get meridien & symptomes
     */

    $("body").on("click", ".info", function() {
        var $infoContainer = $(this).parent().parent().find('.pathology_info__container');
        var $meridienContainer  = $(this).parent().parent().find('.pathology_meridien_container');
        var $symptomeContainer = $(this).parent().parent().find('.pathology_symptoms_container');
        var $title = $(this).parent();

        // Meridien
        $.ajax({
            url: "getMeridienByPatho/" + $(this).data('idp'),
            method: 'get',
        }).done(function(response) {

            if ($title.hasClass('active')) {

                $title.removeClass('active');
                $infoContainer.slideUp(300);

            } else {

                $infoContainer.hide();
                $title.addClass('active');

                console.log(response);

                $meridienContainer.html(response);
                $infoContainer.slideDown(300);
            }

        });

        // Symptomes
        $.ajax({
            url: "getSymptomesByPatho/" + $(this).data('idp'),
            method: 'get',
        }).done(function(response) {
            $symptomeContainer.html(response);
        });


    });
});