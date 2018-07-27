$('body').on('click', '[data-editable]', function(){
  
  var $el = $(this);
  var $height = $(this).height();
  var $width = $(this).width();            
  var $input = $('<input/>').val( $el.text() ).height($height).width($width);
  $el.replaceWith( $input );
  
  var save = function(){
    var $p = $('<p data-editable />').text( $input.val() );
    $input.replaceWith( $p );
  };
  
  /**
    We're defining the callback with `one`, because we know that
    the element will be gone just after that, and we don't want 
    any callbacks leftovers take memory. 
    Next time `p` turns into `input` this single callback 
    will be applied again.
  */
  $input.one('blur', save).focus();

  $( ".about" ).change(function() {
  var about = $(this).val();
});


  $.ajax(
     {
         url:'profileval.php',   //the ajax request is sent to the loginval.php which checks for the available credentails are true or false
         method:'POST',
         data: {
                 
                  about:about

               },
         success: function(response)
         {

            $("#response").html(response);
            if (response.indexOf('success')>0)   //checks for if the result successs appears from the response of  loginval php file
            {
                

             //if the success has been already appeared then it redirecst you o the profile page of yours
            }
         },

         dataType:'text'
          
     


     });
  
});
