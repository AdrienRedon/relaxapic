var $ = require("jquery");

$.fn.select = function() {

// private

    var selected;
    var $container = this;
    var $toggle = $container.find('.filter__toggle');
    var $title = $container.find('legend');
    var titleContent = $title.html();

    /**
     * Toggle Dropdown multiselect list
     */
    this.on("click", ".filter__toggle", function() {
        console.log('toggle');
        if ($container.hasClass('active')) {
            $container.removeClass('active');
        } else {
            $('.filter').each(function() {
                $(this).removeClass('active');
            });
            $container.addClass('active');
        }
    });
    
    /**
     * Add or remove item
     */
    //  $liste.on("click", ".option_item", function() {
    //     var $option = $(this);
    //     var html = '';

    //     // on modifie le selected
    //     selected = {
    //         id : $option.val(), 
    //         val : $option.html()
    //     };

    //     if (selected) {
    //             html = selected.val;
    //     } else {
    //         html = titleContent;
    //     }
    //     $title.html(html);
    //     $titleContainer.removeClass('active');
    //     $liste.slideUp(300);
    // });

// public       
    this.initialize = function() {
        return this;
    };

    this.getSelected = function() {
        return selected;
    };

     return this.initialize();
};
