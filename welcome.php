<?php
   $_SESSION["username"] = $_POST["username"];
   $_SESSION["email"] = $_POST["email"];
   $_SESSION["mobile"] = $_POST["mobile"];
   $_SESSION["personal_info"] = $_POST["personal_info"];
   $_SESSION["job_info"] = $_POST["job_info"];
   $_SESSION["skills"] = $_POST["skills"];
   $_SESSION["college"] = $_POST["college"];
   $_SESSION["extra"] = $_POST["extra"];

   setcookie("user_login", "", time() - 3600);

  ?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome page</title>

<meta name="viewport" content="width=device-width"/>
<meta name="login_form" content="Form_task"/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body id="top">
	<?php $pic = $_COOKIE["image"];
	echo $_SESSION["username"];
	      $profile_image = 'images/' . ($pic); ?>
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="<?php echo $profile_image; ?>" alt="image" />
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php echo $_SESSION["username"];?></h1>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			
				<li>Email: <a href="http://www.google.com"><?php echo $_SESSION["email"]; ?></a></li>
				<li>mobile:<?php echo $_SESSION["mobile"]; ?> </li>
			
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>
				
				<div class="sectionContent">
					<ul class="jobtitle">
					<p> <?php echo $_SESSION["personal_info"]; ?>.</p>
				</ul>
				</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="jobtitle">
					<h4>Company Name: <?php echo $_POST["job_title"]; ?></h4>
					<p><?php echo $_SESSION["job_info"]; ?>.</p>
					</ul>
				
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
					<p><?php echo $_SESSION["skills"]; ?>.</p>
					
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="education">
					<h3>College/University</h3>
					<p><?php echo $_SESSION["college"]; ?>.</p>
					
				</ul>	
			</div>
			<div class="clear"></div>
		</section>

		<section>
			<div class="sectionTitle">
				<h1>Extra Information</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="education">
					<p><?php echo $_SESSION["extra"]; ?>.</p>
					
				</ul>
			
					
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>

</body>
</html>
