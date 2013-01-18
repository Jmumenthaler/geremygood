
// Shuffle Function

(function($){
 
    $.fn.shuffle = function() {
 
        var allElems = this.get(),
            getRandom = function(max) {
                return Math.floor(Math.random() * max);
            },
            shuffled = $.map(allElems, function(){
                var random = getRandom(allElems.length),
                    randEl = $(allElems[random]).clone(true)[0];
                allElems.splice(random, 1);
                return randEl;
           });
 
        this.each(function(i){
            $(this).replaceWith($(shuffled[i]));
        });
 
        return $(shuffled);
 
    };
 
})(jQuery);

$(document).ready(function(){

$('#friends ul li').shuffle();
$('#organizations ul li').shuffle();


$('nav a').click(function(e){
  e.preventDefault();

  var destination = $(this).attr('href');
  var destinationTop = $(destination).offset();
  $("html, body").animate({ scrollTop: destinationTop.top });
  
});


});

