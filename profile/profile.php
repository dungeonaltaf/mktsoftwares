<?php 
session_start();



if (isset($_GET['id']) && !empty($_GET['id']))
   {

   	  $id=$_GET['id'];
   	  if ($_SESSION["id"]==$id)
   	  {
         
         echo "Welcome to nurtureskills.com";
         $url = "http://localhost/logout.php";
         $site_title = "Logout";        
         echo "<a href=$url>$site_title</a>";
   	 }
   	  else
   	  {

   		echo "<h1>Trying to breach the website is a punishable offence<h1>";
   		exit();
   	  }
      
    }

    else
    {  
         echo "<h1>You seems to lost the path<h1>";
         echo "Login through this link";
         $url = "http://localhost/login/login.php";
         $site_title = "Login";        
         echo "<a href=$url>$site_title</a>";

    	exit();
    }

?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>NurtureSkills Profile-Page</title>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fichiers CSS -->
<link rel="stylesheet" href="reset.css">
<!--[if lt IE 9]> 
	<link rel="stylesheet" href="css/cv.css" media="screen">
<![endif]-->
<link rel="stylesheet" media="screen and (max-width:480px)" href="mobile.css">
<link rel="stylesheet" media="screen and (min-width:481px)" href="cv.css">
<link rel="stylesheet" media="print" href="print.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</script>
</head>

<body>
	
	<p id = "response"></p>


	<!-- Header -->
	<header role="banner">
		<div class="container_16">
				<hgroup>
					<h1></h1>
					<h2> Quality tutor</h2>
				</hgroup>

				<figure>
					<img src="avatar.jpg" alt="Sheldon COOPER">
				</figure>
		</div>
	</header>
	
	<!-- Contact -->
	<section class="contactform clearfix">
		<div class="container_16">
			<h3>Contactez-moi</h3>
			<p>Remplissez le formulaire ci-dessous afin de m'envoyer un message. Je vous répondrais dans les plus bref délai. 
			<br><em>Tous les champs sont requis.</em></p>
			<form novalidate="novalidate" method="post" action="#" name="contact" class="grid_16">
				<p class="grid_10"><textarea name="message" placeholder="Votre message" class="required"></textarea></p>
				<p class="grid_6">
					<input name="nom" placeholder="Nom - Prénom" class="required" type="text">
					<input name="email" placeholder="Adresse email" class="required" type="email">	
					<input name="envoi" value="Envoyer le message" class="required" type="submit">
					<span class="messageform"></span>
				</p>
			</form>
		</div>
	</section>
	
	<!-- Corps -->
	<section role="main" class="container_16 clearfix">
		<div class="grid_16">
			<!-- A propos -->
			<div class="grid_8 apropos" class = "grid_8 about">
				<h3>About</h3>
				<p>This section is what people will see about you.Click to edit.</p>
				<p data-editable class = "about">Pellentesque nec nisi at sapien sagittis sagittis. Aliquam eu 
                condimentum mauris. Proin accumsan enim at risus hendrerit lobortis. 
                Nunc sollicitudin sodales lectus, et rhoncus mi molestie hendrerit. 
                Vestibulum velit lorem, rhoncus a congue ultricies, faucibus facilisis 
                risus. Mauris turpis ante, aliquet ac venenatis at, ornare ut velit. 
                Duis ut erat neque, eget consectetur tellus. </p>
			</div>
			
			<!-- Compétences -->
			<div class="grid_8 competences" class = "grid_8 skiklls">
				<h3>Skills</h3>
				<ul class="barres">
					<li data-skills="80" id = "skill1">Skill 1<span style="width: 80%;"></span></li>
					<li data-skills="60" id = "skill2">Skill 2<span style="width: 60%;"></span></li>
					<li data-skills="75" id = "skill3">Skill 3<span style="width: 75%;"></span></li>
					<li data-skills="40" id = "skill4">Skill 4<span style="width: 40%;"></span></li>
					<li data-skills="95" id = "skill5">Skill 5<span style="width: 95%;"></span></li>
				</ul>
			</div>
		</div>
		
			<!-- Expériences -->
			<div class="grid_16 experiences">
				<h3>Experiences</h3>
				<ul>
					<li>
						<h4><strong>Job Name</strong></h4>
						<p data-editable class = "yourjob" id ="yourjob1"> Your Job</p> 
							<h4><strong>Employer's Name</strong></h4>
							<p data-editable class = "employername" id = "employername1">Name</p>
						<span class="lieu" class = "employerlocation" id = "locaiton1" >Location</span>
						<span class="dates" class = "employmentdates" id = "employmentdates1">Dates</span>
						<p data-editable class = "jobabout" id = "jobabout1">A short job description, describe your role and tasks in a few words so that the recruiter knows more about the nature of your work.</p>
					</li>
					<li>
						<h4><strong>Job Name</strong></h4>
						<p data-editable class = "yourjob" id ="yourjob2"> Your Job</p> 
							<h4><strong>Employer's Name</strong></h4>
							<p data-editable class = "employername" id = "employername2">Name</p>
						<span class="lieu" class = "employerlocation" id = "locaiton2" >Location</span>
						<span class="dates" class = "employmentdates" id = "employmentdates2">Dates</span>
						<p data-editable class = "jobabout" id = "jobabout2">A short job description, describe your role and tasks in a few words so that the recruiter knows more about the nature of your work.</p>
					</li>
				</ul>
			</div>
		
			<!-- Formations -->
			<div class="grid_16 formations" class = "grid_16 education">
				<h3>Education</h3>
				<ul>
					<li>
						<h4><strong>Name of the training / diploma</strong>on behalf of the school</h4>
						<p data-editable class="institute" id = "institute1"> Name of th the institute</p>
						<span class="lieu" class = "institutelocation" id = "institutelocation1">Location</span>
						<span class="dates" class = "educationduration" id = "educationduration1">Dates</span>
						<p data-editable class = "instituteabout" id = "instituteabout1">Clarify the formation (the abbreviations are not known to everyone)</p>
					</li>
					<li>
						<h4><strong>Name of the training / diploma</strong>on behalf of the school</h4>
						<p data-editable class="institute" id = "institute2"> Name of th the institute</p>
						<span class="lieu" class = "institutelocation" id = "institutelocation2">Location</span>
						<span class="dates" class = "educationduration" id = "educationduration2">Dates</span>
						<p data-editable class = "instituteabout" id = "instituteabout2">Clarify the formation (the abbreviations are not known to everyone)</p>
					</li>
				</ul>
			</div>
		
			<!-- Loisirs -->
			<div class="grid_8 loisirs" class = "grid_8 hobbies">
				<h3>Hobbies</h3>
				<h4><strong>Sports :</strong><h4> <p data-editable>if you practice</p>
				<h4><strong>Association :</strong><h4> 
					<p data-editable>if you are a member of an association.Other more vague hobbies, complete here.</p>
			</div>
		
			<!-- Contact -->
			<div class="grid_8 contact">
				<h3>Contact</h3>
				<p>If you are interested in my profile, do not hesitate to contact me:</p>
				<ul>
					<li class="lieu" class = "userlocation">Paris, France</li>
					<li class="phone" class = "userphoneno.">06 00 00 00 00</li>
					<li class="mail" class = "usermail"><a href="mailto:mon.adresse@email.fr">mon.adresse@email.fr</a></li>
					<li class="site" class = "usersit"><a href="http://www.mon-site.fr/">www.mon-site.fr</a></li>
					<li class="form" class = "usercontactform"><a class="toContactform">via le formulaire de contact</a></li>
                    <li class="form" class = "to contact"><a class="toContactform">via le formulaire de contact</a></li>
				</ul>
			</div>
	</section>]

<!-- Scripts JavaScript -->

<script src="validate.js"></script>
<!--[if lt IE 9]>
<script src="scripts/placeholder.js"></script>
<![endif]-->
<script src="plugins.js"></script>
<script src = "profile.js"></script>

</body>
</html>
