var $ = require("jquery");

$(function() {

    var selectedTypePatho = [];
    var $liste = $(".type_patho_select");
    var $container = $liste.parent();
    var $titleContainer = $container.find('.type_patho_title__container');

    /**
     * Toggle Dropdown multiselect list
     */
    $container.on("click", ".drop_select", function() {
        var $title = $(this).parent();

        $titleContainer.toggleClass('active');
        $liste.slideToggle(300);
    });
    
    /**
     * Add or remove item
     */
     $(".type_patho_select").on("click", ".option_item", function() {
        var $option = $(this);
        var $title = $titleContainer.find('.type_patho__title');
        var html = '';

        // on ajoute si ce n'est pas déjà ajouté
        var exist = $.grep(selectedTypePatho, function(e){ return e.id == $option.val(); });
        if (! exist.length) {
            selectedTypePatho.push({
                id : $option.val(), 
                val : $option.html()
            });
        } else {
            selectedTypePatho.splice(exist, 1);
        }

        if (selectedTypePatho.length) {
            for (var i = 0; i < selectedTypePatho.length; i++) {
                html += selectedTypePatho[i].val;
                html += ', ';
            }
            html = html.substr(0, html.length - 2);
        } else {
            html = 'Types de pathologie';
        }
        $title.html(html);
        $titleContainer.removeClass('active');
        $liste.slideUp(300);
    });
});