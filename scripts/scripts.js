
$(document).ready(function(){
  var y=0;
  var logo = $('h1 #logo');	
  $(window).scroll(function (event) {
	// what the y position of the scroll is
	y = jQuery(this).scrollTop();
	// whether that's below the form
  console.log(y);
  
  if(y>100){
    logo.addClass('locked');
  }else{
    logo.removeClass('locked');   
  };

    });
   $(function() { $('#main_navigation').localScroll({ duration: 800, easing:'easeInOutQuart' }); })

   $('figure#skills meter').each(function(){
       value = $(this).attr('value');
        $(this).css({'padding-top' : (value*2)+'px','padding-bottom': 0 });
        console.log(value);  
   });
   $('figure#skills meter').mouseenter(function(){
       var hovered = $(this).text().toLowerCase();
       $('figure#time .'+hovered+' b').addClass('hovered');
       });
       
       $('figure#skills meter').mouseleave(function(){
       var hovered = $(this).text().toLowerCase();
       $('figure#time .'+hovered+' b').removeClass('hovered');
       });
       
   $('figure#time meter b').mouseenter(function(){
       var hovered = $(this).text().toLowerCase();
       console.log(hovered);   
       $('figure#skills .'+hovered).addClass('hovered');
       });

       $('figure#time meter').mouseleave(function(){
       var hovered = $(this).text().toLowerCase();
       $('figure#skills .'+hovered).removeClass('hovered');
       });
      
      
    $('a.phone-number').click(function(){
        $('#phone-number').show();
    });
    $('#phone-number').click(function(){
        $(this).hide();
    });
    
    $('.showcontent').click(function(e){
        $(this).siblings('.content').fadeIn();
        e.preventDefault();
    });

}); //END OF DOC READY
