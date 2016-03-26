var $ = require("jquery");

$(function() {
    $("#meridien").on("click", function() {
    	$.ajax(
    		url: "/public/getPatho",
    		data: {
    			id: 1
    		}
    	);
    });
});