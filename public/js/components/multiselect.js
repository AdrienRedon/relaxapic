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
        if ($container.hasClass('active')) {
            $container.removeClass('active');
        } else {
            $('.filter').each(function() {
                $(this).removeClass('active');
            });
            $container.addClass('active');
        }
    });

    this.on("focus", "input[type=checkbox]", function() {
        
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
     * Add or remove item
     */
    this.on("change", "input[type=checkbox]", function() {
        var $checkbox = $(this);
        var $label = $checkbox.siblings('label');
        var html = '';

        // on ajoute si ce n'est pas déjà ajouté
        var exist = $.grep(selected, function(e){ 
            return e.id == $checkbox.val(); 
        });
        if (! exist.length) {
            selected.push({
                id : $checkbox.val(), 
                val : $label.html()
            });
        } else {
            selected = selected.filter(function(el) {
                return el.id !== $checkbox.val();
            });
        }

        if (selected.length) {
            for (var i = 0; i < selected.length; i++) {
                html += selected[i].val;
                html += ', ';
            }
            html = html.substr(0, html.length - 2);
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
