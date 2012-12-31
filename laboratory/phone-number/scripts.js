$(document).ready(function(){

  $('form input').keyup(function(e){
    // Grab the input value
    value = $(this).val();
    // Format it like a phone number
    newval = value.replace(/(\d\d\d)(\d\d\d)(\d\d\d\d)/, "$1-$2-$3");
    // Replace the input with the formatted value
    $(this).val(newval);
  })
  
  $('input[type=submit]').click(function(e){
    // Find their phonenumber
    value = $('form input').val();
    // Build link and append it
    linktext = '<a onclick="webPhoneNumber('+value+');return false;" href="tel:'+value+'">'+value+'</a>'
    textareatext = $('#result textarea').text();
    $('#result textarea').text(linktext+textareatext);
    // Flip card over
    $('.flip-container').addClass('result')
    // Prevent from submiting form
    return false;
  });

});
