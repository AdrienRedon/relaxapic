var $ = require("jquery");

$.fn.select = function() {

// private

    var selected;
    var $liste = this.children('select');
    var $titleContainer = this.find('.title__container');
    var $title = $titleContainer.find('.title');
    var titleContent = $title.html();

    /**
     * Toggle Dropdown multiselect list
     */
    this.on("click", ".drop_select", function() {
        $titleContainer.toggleClass('active');
        $liste.slideToggle(300);
    });
    
    /**
     * Add or remove item
     */
     $liste.on("click", ".option_item", function() {
        var $option = $(this);
        var html = '';

        // on modifie le selected
        selected = {
            id : $option.val(), 
            val : $option.html()
        };

        if (selected) {
                html = selected.val;
        } else {
            html = titleContent;
        }
        $title.html(html);
        $titleContainer.removeClass('active');
        $liste.slideUp(300);
    });

// public       
    this.initialize = function() {
        return this;
    };

    this.getSelected = function() {
        return selected;
    };

     return this.initialize();
};
