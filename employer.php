<?php
	// load employer data
	require('employer_data.php');
?>


<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link href="emp.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
		<link rel="icon" type="/img/png" href="/jobquery/assets/images/search_img.png">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet">
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

		<!-- PAGE HOLDER -->
		<div class="page_holder">
			<div class="user_container">
				<?php
					foreach($employer as $e) {
						echo 	'<div class="background_container"></div>
								<div class="profile_container"></div>
								<div class="name_container"><b>'. $e -> employerName .'</b></div>
								<div class="rank_container"><i class="fas fa-check"></i></div>
								<div class="description_container"><b>' . $e -> employerDescription . '</b></div>
						';
					}
				?>
			</div>
			<div class="bottom_header">
				<div class="left">
					<a class="textContent wall">Feed</a>
					<a class="textContent contact">Contact</a>
					<a class="textContent jobs active">Jobs</a>
				</div>
				<div class="right">
					<a class="textContent follow">Follow</a>
				</div>
			</div>

		</div>

		<!-- FOOTER MENU -->
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
							<a href="terms.html">Terms</a>
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
			</div>
		
	</body>
</html>
