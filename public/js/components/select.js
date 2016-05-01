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
        if ($container.hasClass('active')) {
            $container.removeClass('active');
        } else {
            $('.filter').each(function() {
                $(this).removeClass('active');
            });
            $container.addClass('active');
        }
    });

    this.on("focus", "input[type=radio]", function() {
        
            $('.filter').each(function() {
                $(this).removeClass('active');
            });
            $container.addClass('active');
    });

    $('body').on("keyup", function(e) {
        if (e.keyCode === 27) { 
            $container.removeClass('active');
        }
    });
    
    /**
     * Change selected value
     */
    this.on("change", "input[type=radio]", function() {
        var $checkbox = $(this);
        var html = '';

        selected = {
            id : $checkbox.val(), 
            val : $checkbox.attr('data-name')
        };

        if (selected) {
                html = selected.val;
        } else {
            html = titleContent;
        }

        $title.html(html);
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
