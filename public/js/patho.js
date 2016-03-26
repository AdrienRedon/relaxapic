var $ = require("jquery");

$(function() {
    $("#meridien").on("click", function() {
    	$.ajax({
    		url: "getPatho/1",
    		method: 'get',
    	}).done(function(data) {
    		console.log(data);
    	});
    });
});