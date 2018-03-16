<?php 
	// load our library of functions
	require('db_simple.php');

	// fetch jobs
	$sqle = 'SELECT * FROM employers';
	$sqlj = 'SELECT * FROM jobs ';
	$employers = get_list($sqle);
	$jobs = get_list($sqlj);
	
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Job Query - Search for a Job</title>
		<link href="websitedesign.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet">
		<link rel="icon" type="img/png" href="search_img.png">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	</head>
	<body>
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
		<div class="page_holder">
			<div class="filter_holder">
				<div class="filter_search">
					<b class="title">FILTER SEARCH</b>
					<div id="filter-holder" class="filters">
						<b class="smaller_title">FILTERS</b><br>
							<b class="v2smaller_title">Location</b>
							<i class="fas fa-map-marker-alt" classtype="icon"></i><br>
							<div id="search-location-holder">
							</div>
							<br>
							<b class="v2smaller_title">Job</b>
							<i class="fas fa-briefcase" classtype="icon"></i><br>
							<div id="search-job-holder">
							</div>
					</div>
				<br>
					<div class="company">
						<b class="smaller_title">COMPANY</b><br>
						<input class="company_filter_search" placeholder="Search by Company" />
					</div>
				<br>
					<div class="distane">
						<b class="smaller_title">DISTANCE</b><br><br>
						<b class="v2smaller_title center">5 Miles</b>
							<div class="distance_slider">
								<div class="circle">
							</div>
						</div>
					</div>
				<br>

					<div class="experience">
						<b id="level-holder" class="smaller_title">EXPERIENCE</b><br>
							<a id="lvl1" class="level 1 active" onclick="toggleLevel(this);">1</a>
							<a id="lvl2" class="level 2" onclick="toggleLevel(this);">2</a>
							<a id="lvl3" class="level 3" onclick="toggleLevel(this);">3</a>
							<a id="lvl4" class="level 4" onclick="toggleLevel(this);">4</a>
							<a id="lvl5" class="level 5" onclick="toggleLevel(this);">5</a>
					</div>
				<br>

					<div class="job_status">
						<b class="smaller_title">JOB STATUS</b><br>
							<b class="v2smaller_title">Part Time</b><i class="fas fa-hourglass-half" classtype="icon"></i><br>
								<div class="toggle_button" onclick="this.classList.toggle('active')">
									<div class="inner_circle"></div>
								</div>
							<b class="v2smaller_title">Full Time</b><i class="fas fa-hourglass" classtype="icon"></i><br>
						<div class="toggle_button" onclick="this.classList.toggle('active')">
							<div class="inner_circle"></div>
						</div>
					</div>
				<br>

					<div class="sort_by">
						<b class="smaller_title">SORT BY</b><br>
							<b class="v2smaller_title">Verification</b><i class="fas fa-check" classtype="icon"></i><br>
								<div class="toggle_button" onclick="this.classList.toggle('active')">
									<div class="inner_circle"></div>
								</div>
							<b class="v2smaller_title">Most Favorited</b><i class="fas fa-heart" classtype="icon"></i><br>
								<div class="toggle_button" onclick="this.classList.toggle('active')">
									<div class="inner_circle"></div>
								</div>
					</div>
				<br>
					<div class="recent_searches">
						<b class="title" onclick="">RECENT SEARCHES</b>
						<ul id="recent-search-holder">
						</ul>
					</div>
			</div>
		</div>
		<div class="job_holder">
			<!--
			foreach($jobs as $j){
				echo 
					'	<div>
						<a class="employer_name"href="?e=' . $j -> employerId . '">' . $j -> employerName . '</a><br />
						<a class="job_title" href="?j=' . $j -> jobId . '" style="font-style: italic">' . $j -> jobTitle . '</a><br />
						<div class="job_description" style="font-weight: bold">' . $j -> jobDescription . '</div></div>
						<br />';
			}
		?>
			foreach($employers as $e){

				echo '	<div class="employer employer_' . $e -> employerId . '">
						<a href="employer.php?e=' . $e-> employerId . '"><b>' . $e -> employerName . '</b></a>
						<h4 href="employer.php?e=' . $e-> employerId . '"><b>' . $e -> employerLocation . '</b></a>
						</div>
						';
			}

		?> 
		-->
		</div>
	</div>
		<br>
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
			</div>
		</div>
		<script src="functions.js?v=<?php echo time();?>" type="text/javascript"></script>
	</body>
</html>
