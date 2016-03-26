var $ = require("jquery");


if (window.location.href.indexOf("public/pathologies") !== false) {

    require("./patho");

} else if (window.location.href.indexOf("public/") !== false) {

    require("./popup");

}