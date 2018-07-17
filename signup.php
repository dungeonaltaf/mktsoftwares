<?php require 'signupval.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="signup.css">
  <script type="text/javascript">
    
    function validateForm()
{
 
 var passsw = document.getElementById("password").value;
 var passwr = document.getElementById("passwordr").value;
     
    if (passsw==passwr) {
        return true;
    }
    else {
alert("Password do not match");
        return false;
    }

    }


function togglePassword()

  {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


  </script>
</head>
<body>
  <p id = lala> </p>

<h2>Modal Signup Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">X</span>
  <div id="form-messages"></div>
  <form  name = "SignUp" 
     onsubmit ="return validateForm()" 
     class="modal-content" 
     action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  
     method = "post" 
     id = "ajax-contact">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Please enter your first name" name="fname" pattern = "[a-zA-Z]{0,}" title="Only letters are allowed" required autofocus>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Please enter your last name" name="lname" pattern="[A-zA-Z]{0,}" title="Only letter are allowed" required>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username"  required="[a-zA-Z][a-zA-Z0-9-_\.]{1,20}" title="2-20 characters Alpha numeric">

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter valid email address">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Strong Password" name="psw" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id = "password">
      <label>
      <input type="checkbox" onclick="togglePassword()">
      Show Password
      </label>
      <label for="pswr"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pswr" required title="Repeat Password" id = "passwordr">
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" >Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script type="text/javascript" src="jquery-3.3.1.js"></script>
<script type="text/javascript" src="app.js"></script>

</body>
</html>
