<!--

<?php 
	// load our library of functions
	require('db_simple.php');


	// load our data
	require('load_data.php');

?>

-->

<!DOCTYPE html>
	<head>
		<html lang="eng">
		<meta charset="UTF-8">
		<title>Job Query - Login</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet">
		<link rel="icon" type="/img/png" href="assets/images/search_img.png">
		<link href="header.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
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

		<!-- SIDEBAR HOLDER -->
		<div class="sidebar_holder">

			<!-- RECENT SEARCH -->
			<div class="recent_searches">
					<b class="title">RECENT SEARCHES</b>
					<ul id="recent-search-holder">
					</ul>
			</div>

			<!-- FILTER SEARCH -->
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

			<!-- COMPANY SEARCH -->
			<div class="company">
					<b class="smaller_title">COMPANY</b><br>
					<input class="company_filter_search" placeholder="Search by Company" />
			</div>

			<!-- DISTANCE -->
			<div class="distane">
					<b class="smaller_title">DISTANCE</b><br>
					<b class="v2smaller_title center">5 Miles</b>
					<div class="distance_slider">
						<div class="circle"></div>
					</div>
				</div>

			<!-- EXPERIENCE -->
				<div class="experience">
					<b id="level-holder" class="smaller_title">EXPERIENCE</b><br>
						<a id="lvl1" class="level 1 active" onclick="toggleLevel(this);">1</a>
						<a id="lvl2" class="level 2" onclick="toggleLevel(this);">2</a>
						<a id="lvl3" class="level 3" onclick="toggleLevel(this);">3</a>
						<a id="lvl4" class="level 4" onclick="toggleLevel(this);">4</a>
						<a id="lvl5" class="level 5" onclick="toggleLevel(this);">5</a>
				</div>

			<!-- JOB STATUS -->
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

			<!-- SORT BY -->
				<div class="sort_by">
					<b class="smaller_title">SORT BY</b><br>
						<b class="v2smaller_title">Business</b><i class="fas fa-check" classtype="icon"></i><br>
							<div class="toggle_button" onclick="this.classList.toggle('active')">
								<div class="inner_circle"></div>
							</div>
						<b class="v2smaller_title">Most Favorited</b><i class="fas fa-heart" classtype="icon"></i><br>
							<div class="toggle_button" onclick="this.classList.toggle('active')">
								<div class="inner_circle"></div>
							</div>
				</div>

			</div>
		</div>

		<!-- PAGE HOLDER -->
		<div class="page_holder">
		
			
			<!-- PAGE CONTAINER -->
			<div class="page_container">
			<?php
				foreach($sponsoredJob as $sj){
					echo '	<div class="job_holder" >
								<a class="job_sponsored">SPONSORED JOB</a><br />
								<a class="job_title" href="?j=' . $sj -> jobId . '">' . $sj -> jobTitle . '</a><br />
								<a class="employer_name" href="employer.php/?e=' . $sj -> employerId . '">' . $sj -> employerName . '</a><br />
								<h3 class="job_location">' . $sj -> jobLocation . '</h3><br />
								<div class="job_description" ">' . $sj -> jobDescription . '</div>
					</div>
					';
				}

				foreach($sponsoredEmployer as $se){
					echo '	<div class="employer_holder" >
								<a class="employer_sponsored">SPONSORED EMPLOYER</a><br />
								<a class="employer_name" href="employer.php/?e=' . $se -> employerId . '">' . $se -> employerName . '</a><br />
								<div class="employer_description" ">' . $se -> employerDescription . '</div>
					</div>
					';
				}
			
				foreach($jobs as $j){
					echo 
						'	<div class="job_holder" >
								<a class="job_title" href="?j=' . $j -> jobId . '">' . $j -> jobTitle . '</a><br />
								<a class="employer_name" href="employer.php/?e=' . $j -> employerId . '">' . $j -> employerName . '</a><br />
								<h3 class="job_location">' . $j -> jobLocation . '</h3><br />
								<div class="job_description" ">' . $j -> jobDescription . '</div>
							</div>';
				}
			
				//foreach($employers as $e){

					//echo '	<div class="job_holder employer employer_' . $e -> employerId . '">
								//<a href="employer.php?e=' . $e-> employerId . '"><b>' . $e -> employerName . '</b></a>
								//<p>' . $e -> employerLocation . '</p>
							//</div>
						//	';
				//}

			?> 
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
			<script src="functions.js?v=<?php echo time();?>" type="text/javascript"></script>
	</body>