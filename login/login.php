<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Gmail Login </title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  
  
      <link rel="stylesheet" href="login.css">

  
</head>

<body>

  
<div class="form">
  <form action="/" method="POST"> 
    <div class="back"> <span><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></span></div>
    <h3>Enter your credentials</h3>
    <div class="inputs"> 
      <div class="email">
        <input class="first" type="text" placeholder="Your email"/ id="email" required>
        <button class="next">Next</button>
      </div>
      <div class="password">
        <input class="second" type="password" placeholder="Enter Password"/ id = "password" required>
        <button class="login">Log in</button>
      </div>
    </div>
  </form>
</div>
<p class="warning" id = "response"></p>
  
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src = "loginval.js"></script>


</body>

</html>

