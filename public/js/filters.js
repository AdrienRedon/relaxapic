var $ = require("jquery");
var selectedTypePatho = [];

$(function() {
    $(".drop_select").on("click", function() {
        var $container  = $(this).parent().parent();
        var $liste = $container.find('.type_patho_select');
        var $title = $(this).parent();

        if ($title.hasClass('active')) {

            $title.removeClass('active');
            $liste.slideUp(400);

        } else {

            $liste.show();
            $title.addClass('active');

            $liste.slideDown(400);
        }
    });
    
     $(".type_patho_select .option_item").on("click", function() {
        var $option = $(this);
        var $container  = $(this).parent().parent();
        var $liste = $(this).parent();
        var $title = $container.find('.type_patho__title');
        var html = '';

        // on ajoute si ce n'est pas déjà ajouté
        var exist = $.grep(selectedTypePatho, function(e){ return e.id == $option.val(); });
        console.log(selectedTypePatho);
        console.log(exist);
        if (exist.length === 0) {
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
            $title.html(html);
            $liste.slideUp(400);

        } else {

            html += 'Types de pathologie';
            $title.html(html);
            
            $liste.show();
            $title.addClass('active');

            $liste.slideDown(400);
        }
    });
});





/*
// define somewhere to store
// the values currently selected
var selected = [];

// grab the element we'll be listening
// for changes on, in this case 
// .multiselect
var select = document.querySelector('.multiselect');

// we'll output the value somewhere for debugging purposes
var debug = document.querySelector('.output');

var currently_selected = document.querySelectorAll('.selected-item');

// set up an event listener to listen for
// a change in value of our input
select.addEventListener('change', function(event) {
    var current = this.value;
  
  // we'll check our currently selected array and
  // prevent duplicate values
  for(var option = 0; option < selected.length; option++) {
    if(selected[option] == current) {
        console.log('Attempt to append a duplicate value prevented.');
            return;
    }
  }
  
  // otherwise, we'll push the
  // selected value to our array
    selected.push(this.value);
  debug.innerHTML += '<li class="selected-item">' + this.value + '</li>';
});*/