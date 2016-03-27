var $ = require("jquery");
window.jQuery = $;
window.$ = $;
var select2 = require("chosen");


$(function() {
    $('#filters_patho').chosen();
});