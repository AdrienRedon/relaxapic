var $ = require("jquery");
window.jQuery = $;
window.$ = $;
var select2 = require("select2");


$(function() {
    $('#filters_patho').select2();
});