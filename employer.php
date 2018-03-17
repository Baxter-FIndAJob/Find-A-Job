<?php
	// load employer data
	require('employer_data.php');
?>


<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link href="/findajob/emp.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	</head>
	<body>
		<!-- HEADER -->
		<div id="header" class="header">
			<div class="search container">

			</div>
			<div class="text container">
				<div class="left">
					<a class="textContent view_jobs">View Jobs</a>
					<a class="textContent view_jobs">View Companies</a>
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


			<div class="job_holder">
			<?php
				//foreach($jobs as $j){
				//	echo 
				//		'	<div>
				//			<a class="job_title" href="?j=' . $j -> jobId . '" style="font-style: italic">' . $j -> jobTitle . '</a><br />
				//			<div class="job_description" style="font-weight: bold">' . $j -> jobDescription . '</div></div>
				//			<br />';
				//}
			?>
			</div>
		<div class="jobs_container">

		</div>
		</div>

		<!-- FOOTER MENU -->
			<div class="footer_menu">
				<br>
					<img src="/findajob/companyLogo.png" class="company_logo" />
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
					<img src="/findajob/globe_img.png" class="language_globe" />
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

				<div style="clear: both;"></div>
			

		
	</body>
</html>
