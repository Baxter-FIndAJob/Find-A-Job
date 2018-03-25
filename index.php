<?php 

// DATA MODEL

	// load our library of functions
	require('server/jobquery_db.php');

	// load homepage data
	extract(loadHomepageData());



// UI

	// start the web page
	require('_includes/header.php');

?>

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
								<a class="employer_name" href="employer.php?e=' . $sj -> employerId . '">' . $sj -> employerName . '</a><br />
								<h3 class="job_location">' . $sj -> jobLocation . '</h3><br />
								<div class="job_description" ">' . $sj -> jobDescription . '</div>
					</div>
					';
				}

				foreach($sponsoredEmployer as $se){
					echo '	<div class="employer_holder" >
								<a class="employer_sponsored">SPONSORED EMPLOYER</a><br />
								<a class="employer_name" href="employer.php?e=' . $se -> employerId . '">' . $se -> employerName . '</a><br />
								<div class="employer_description" ">' . $se -> employerDescription . '</div>
					</div>
					';
				}
			
				foreach($jobs as $j){
					echo 
						'	<div class="job_holder" >
								<a class="job_title" href="?j=' . $j -> jobId . '">' . $j -> jobTitle . '</a><br />
								<a class="employer_name" href="employer.php?e=' . $j -> employerId . '">' . $j -> employerName . '</a><br />
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
		


			<?php
				// html footer
				require('_includes/footer.php');
			?>
			<script src="client/js/functions.js?v=<?php echo time();?>" type="text/javascript"></script>
		</div>