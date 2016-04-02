var $ = require("jquery");

require('../components/multiselect');
require('../components/select');

var selectPatho = $('.type_patho__container').select();
var multiselectMeridien = $('.meridien__container').multiselect();
var multiselectCaracteristiques = $('.caracteristiques__container').multiselect();

$('body').on('submit', '.filters__container', function(e) {
    e.preventDefault();
    var selectedPatho = selectPatho.getSelected();
    var selectedMeridien = multiselectMeridien.getSelected();
    var selectedCaracteristiques = multiselectCaracteristiques.getSelected();

    var url = 'getTypesPatho/pathos';

    if (selectedPatho) {
        url += '/' + selectedPatho.id;
    }

    url += '/meridiens/';
    selectedMeridien.forEach(function(el) {
        url += el.id + ',';
    });
    url = url.replace(/,\s*$/, ""); // get rid of last comma

    url += '/caracteristiques/';
    selectedCaracteristiques.forEach(function(el) {
        url += el.id + ',';
    });
    url = url.replace(/,\s*$/, ""); // get rid of last comma

    $.ajax({
        url: url,
        method: 'get'
    });
    return false;
});