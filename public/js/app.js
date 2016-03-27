if (window.location.href.indexOf("public/pathologies") !== -1) {

    require("./patho");
    require("./filters");
    require("./popup");

} else if (window.location.href.indexOf("public/") !== -1) {

    require("./popup");

}
