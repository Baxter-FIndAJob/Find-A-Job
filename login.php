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
		<div class="header">
			<div class="top container">
				<div class="text_container right">
					<a class="text_content login">LOGIN</a>
					<a class="text_content signup">SIGNUP</a>
				</div>
				
			</div>
			<div class="bottom container">
				<div class="text_container left">
					<a class="text_content view_jobs">VIEW JOBS</a>
					<a class="text_content view_companies">VIEW COMPANIES</a>
					<a class="text_content sponsorship">BECOME A SPONSOR</a>
					<a class="text_content work_permit">WORK PERMIT</a>
					<input type="text" class="search_content job_search" placeholder="Search by Job title" hidden="true" />
					<input type="text" class="search_content location_search" placeholder="Search by Location" hidden="true" />
				</div>
				<div class="text_container right">
					<a class="text_content blog">BLOG</a>
					<a class="text_content about">ABOUT</a>
					<a class="text_content faq">FAQ</a>
					<a class="text_content language">EN</a><img src="assets/images/globe_img.png" class="language_globe">
				</div>				
			</div>
		</div>

		<div id="page_holder" class="page_holder">
			<div class="form_holder" method="post">
				<form class="signup_container active_selection" onsubmit="return validate();">
					<input id="firstName" placeholder="enter first name" / type="Text">
					<input id="lastName" placeholder="enter last name" / type="Text">
					<input id="email" placeholder="enter email" / type="Email">
					<input id="password" placeholder="enter password" / type="Password">
					<input id="retypePassword" placeholder="retype password" / type="Password">
					<br>
					<button type="submit" value="register" class="button">Login</button>
				</form>
			</div>
		</div>
		<br>
		<br>
		<div class="footer_menu">
			<br>
				<img src="assets/images/companyLogo.png" class="company_logo" />
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
					<img src="assets/images/globe_img.png" class="language_globe" />
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
		<script src="validate.js?v=<?php echo time();?>" type="text/javascript"></script>
	</body>