$(document).ready(function(){
$("#login").on('click' ,function(){
	
var email = $("#email").val();
var password =$("#password").val();
console.log(password);

if (email=="" || password=="")
alert("Please fill the eamil and password");
else
{
	$.ajax({
         url:'loginval.php',
         method:'POST',
         data: {
                 login:'1',
                 email1:email,
                 password1:password

         },
         success: function(response){

         	$("#response").html(response);
         },

         dataType:'text'
   


     });
}


});

});