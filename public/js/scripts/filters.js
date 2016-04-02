var $ = require("jquery");

require('../components/multiselect');
require('../components/select');

var selectPatho = $('.type_patho__container').select();
var multiselectMeridiens = $('.meridien__container').multiselect();
var multiselectCaracteristiques = $('.caracteristiques__container').multiselect();

$('body').on('submit', '.filters__container', function(e) {
    e.preventDefault();
    var selectedPatho = selectPatho.getSelected();
    var selectedMeridiens = multiselectMeridiens.getSelected();
    var selectedCaracteristiques = multiselectCaracteristiques.getSelected();


    var url = 'getTypesPatho/pathos';

    if (selectedPatho) {
        url += '/' + selectedPatho.id;
    }

    $.ajax({
        url: url,
        method: 'get'
    }).done(function(data) {
        data = $.parseJSON(data);

        $('.category__container').each(function() {
                $(this).attr('data-meridiens', null);
                $(this).attr('data-caracteristiques', null);
                $(this).hide();
        });

        $('.category__container').each(function() {
            if(parseInt($(this).data('id')) == parseInt(data)) {
                var resultMeridiens = selectedMeridiens.map(function(el) {
                    return el.id;
                });
                var resultCaracteristiques = selectedCaracteristiques.map(function(el) {
                    return el.id;
                });
                $(this).fadeIn(400);
                $(this).attr('data-meridiens', resultMeridiens.join());
                $(this).attr('data-caracteristiques', resultCaracteristiques.join());
            }
        });
    });
    return false;
});