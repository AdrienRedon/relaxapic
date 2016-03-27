if (window.location.href.indexOf("public/pathologies") !== -1) {

    require("./patho");
    require("./filters");

} else if (window.location.href.indexOf("public/") !== -1) {

    require("./popup");

}
