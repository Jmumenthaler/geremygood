//Geremy Good 2012
//

console.log('Interaction.js is loaded');

// When keydown on input, find that ID
$('#skip').keyup(function(){
  var where = this.value;
  console.log(where);  
   window.location.hash = "#"+where;
});

$('#start-counting li>a').click(function(e){
  e.preventDefault();
  number = $(this).parent('li').attr('id');
  numberFile = $(this).find('img').attr('src');
  
  // If lightbox exists,  just change the number, otherwise make it
  if($('#lightbox').length > 0 ){
    $('#lightbox img').attr('src',numberFile);
  }else{  
    var lightbox = '<div id="lightbox"><img src="'+numberFile+'" width="70%" /></div>'
    $('#start-counting').prepend(lightbox);
  }
})
  
  // Add the little count after ever five
  
  var theCount = $('#start-counting li').length
  
  for( var i=5; i<theCount; i++){
    if( i % 5 === 0   ){
      var num = i-1;
      $('#start-counting li:nth('+num+')').prepend('<i class="five">'+i+'</i>');
      console.log(i);
    }
  }
 
  // If click About, 

   $('#aboutNav').click(function(e){
     e.preventDefault();
      $('#bar').toggleClass('tellMe');
   });
  
