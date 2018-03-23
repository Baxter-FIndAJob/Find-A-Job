<?php>
	require("login_data.php");
?>


<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Job Query - Login</title>
		<link href="logincss.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet">
		<link rel="icon" type="img/png" href="search_img.png">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	</head>
	<body>
		<!-- HEADER -->
		<div id="header" class="header">
			<div class="search container">

			</div>
			<div class="text container">
				<div class="left">
					<a class="textContent view_jobs" href="/findajob">View Jobs</a>
					<a class="textContent view_companies">View Companies</a>
					<a class="textContent sponsorship">Become a Sponsor</a>
				</div>
				<div class="right">
					<a class="textContent blog">Blog</a>
					<a class="textContent about">About</a>
					<a class="textContent faq">FAQ</a>
					<a class="textContent login">Login</a>
					<a class="textContent signup" href="login.php">Become a Member</a>
				</div>
			</div>
		</div>

		<div id="page_holder" class="page_holder">
			<div class="form_holder" method="post" action="login.php" >
				<div class="form_options">
					<h4 class="active_selection">Sign Up</h4>
					<h4 class="inactive_selection">Login</h4>
				</div>

				<div class="login_holder" class-type="active_selection">
					<div class="inputwithText" class-type="Email">
						<input class="Input" maxlength="255" type="Text" placeholder="Username">
						 <i class="fas fa-envelope"></i>
					</div>
					<div class="inputwithText" class-type="Password">
						<input class="Input" maxlength="255" type="Password" placeholder="Password">
						<i class="fas fa-key"></i>
					</div>
					<br>
					<button type="submit" class="submit">Login</button>
					<h3>OR</h3>
					<h4>Forgot your password?</h4>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="footer_menu">
			<br>
				<img src="companyLogo.png" class="company_logo" />
			<br>
			<br>
				<!-- FOOTER COLUMN 1 -->
				<div class="footer_column">
					<div class="selection_name">
						<h4>Language</h4>	
					</div>
					<div class="inactive_selection" data-type="inactive">
						<a href="about.html">English (US)</a>
					</div>
					<div class="inactive_selection" data-type="inactive">
						<a>View more</a>	
						
					</div>
					<img src="globe_img.png" class="language_globe" />
				</div>

				<!-- FOOTER COLUMN 2 -->
				<div class="footer_column">
					<div class="selection_name">
						<h4>Support</h4>
					</div>
					<div class="inactive_selection" data-type="inactive">
						<a href="support.html">Help/FAQ</a>
					</div>
					<div class="inactive_selection" data-type="inactive">
							<a href="privacy.html">Privacy Policy</a>
						</div>
					<div class="inactive_selection" data-type="inactive">
							<a href="terms.html">Terms and Agreements</a>
					</div>
				</div>

				<!-- FOOTER COLUMN 3 -->
				<div class="footer_column">
					<div class="selection_name">
						<h4>Company</h4>
					</div>
					<div>
						<a>© Mountain Bunny 2018</a>
					</div>
					<div class="inactive_selection" data-type="inactive">
						<a href="about.html">About Us</a>
					</div>
					<div class="inactive_selection" data-type="inactive">
						<a href="blog.html">Blog</a>
					</div>
				</div>	

				<div style="clear: both;"></div>
			</div>
		</div>

	</body>