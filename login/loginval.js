$(document).ready(function()
{
    setTimeout(function () {
    $('.email > input').focus();
}, 300);

$('.email > input').on('keydown', function (event) 
{
    if (event.which === 13 || event.keyCode === 13) 
    {
        $('.email > input').blur();
        $('.next').click();
    }
});

$('.password > input').on('keydown', function (event) {
    if (event.which === 13 || event.keyCode === 13) {
        $('.login').click();
    }
});


$(".next").on('click' ,function(event)
{
	  var email = $("#email").val();
      if ($.trim(email)==0)
      {
        alert("Please enter your email or username");
        event.preventDefault();

      }
      else
      {
       event.preventDefault();
        $('.inputs').addClass('shift');
        $('.back').addClass('active-back');
        $('.email > input').css({
            'border': '1px solid #cccccc'
        });
        $('.warning').empty();
        setTimeout(function () {
            $('.password > input').focus();
        }, 400);


      }
});


$('.back').on('click', function (event) 
{
    event.preventDefault();
    $('.inputs').removeClass('shift');
    $('.back').removeClass('active-back');
    setTimeout(function () {
        $('.email > input').focus();
    }, 300);
});

$('.login').on('click', function (event) {
    event.preventDefault();
    var email = $("#email").val();
    var password =$("#password").val();
        if (password=="")
    {
        alert("Please input your password ");
    }
    else
    {
        $('form').empty();
        $('form').append('<div class="loader"></div>');
        setTimeout(function () 
        {
           location = location;
        }, 2000);
     
     $.ajax(
     {
         url:'loginval.php',
         method:'POST',
         data: {
                 login:'1',
                 email1:email,
                 password1:password

         },
         success: function(response)
         {

            $("#response").html(response);
               
            
            if (response.indexOf('success')>0) 
            {   

                
               // var mylink ="http://localhost/profile/profile.php?id=";
               // var mylink1 = "http://www.facebook.com";
             // $(location).attr('href',mylink);
               

            }



         },

         dataType:'text'
          
     


     });


    }



}); 

      
});



