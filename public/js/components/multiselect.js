var $ = require("jquery");

$.fn.multiselect = function() {

// private

    var selected = [];
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

    //     // on ajoute si ce n'est pas déjà ajouté
    //     var exist = $.grep(selected, function(e){ 
    //         return e.id == $option.val(); 
    //     });
    //     if (! exist.length) {
    //         selected.push({
    //             id : $option.val(), 
    //             val : $option.html()
    //         });
    //     } else {
    //         selected = selected.filter(function(el) {
    //             return el.id !== $option.val();
    //         });
    //     }

    //     if (selected.length) {
    //         for (var i = 0; i < selected.length; i++) {
    //             html += selected[i].val;
    //             html += ', ';
    //         }
    //         html = html.substr(0, html.length - 2);
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
