<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WEB PROJECT</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section>
		<div class="logo">Crowdstudent</div>
		<img src="images/bg3.jpg" class="bg">
		<div class="content">
			<h2>Let's Assist in<br>Your finance</h2>
			<p>We are delighted to introduce our group project,<br>
			our aim is to drive social change in our community.<br> This project is presented in qualification of the <br>Development Software (DSW02A1) module.<br>Education has been a drive for social change<br>in the economic and political development. <br>Education is a basic need for everyone no matter<br> the race, religion, culture, tribe, etc.</p>
			<a href="more/more.html">Learn More</a>
		</div>
		<p class="copyrightText">©2021. Group Project Development Software</p>
	</section>
	<div class="menu" onclick="toggleMenu();"></div>
	<div class="navigation">
		<ul>
			<li><a href="userlogin/userdb/login.php">User</a></li>
			<li><a href="funderlogin/funderdb/login.php">Funder</a></li>
			<li><a href="team/team.html">OUR DSW Team</a></li>
		</ul>
		<div class="social">
			<ul>
				<li><a href="#"><img src="images/fa.png"></a></li>
				<li><a href="#"><img src="images/tw.png"></a></li>
				<li><a href="#"><img src="images/in.png"></a></li>
			</ul>
		</div>
	</div>
	<script>
		function toggleMenu()
		{
			var menuToggle = document.querySelector('.menu');
			var navigation = document.querySelector('.navigation');
			menuToggle.classList.toggle('active');
			navigation.classList.toggle('active');
		}
	</script>
</body>
</html>