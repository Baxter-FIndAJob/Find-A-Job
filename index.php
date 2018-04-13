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
	<body>
		<link href="client/css/jobfinder.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">

		<!-- PAGE HOLDER -->
		<div class="page_holder">
			<!-- RECENT SEARCH -->
			<div class="recent_searches">
					<b class="title">RECENT SEARCHES</b>
					<ul id="recent-search-holder">
					</ul>
			</div>
			<!-- PAGE CONTAINER -->
			<div class="page_container">
			<?php
				foreach($sponsoredJob as $sj){
					echo '	<div class="job_holder" >
								<a class="job_sponsored">SPONSORED JOB</a><br />
								<div class="column job">
									<b class="text_container">Job</b><br>
									<div class="column_container">									
										<a class="job_title" href="?j=' . $sj -> jobId . '">' . $sj -> jobTitle . '</a><br />
									</div>
								</div>
								<div class="column employer">
									<b class="text_container">Employer</b>
									<div class="column_container">									
										<a class="employer_name" href="employer.php?e=' . $sj -> employerId . '">' . $sj -> employerName . '</a><br />
									</div>
								</div>
								<div class="column location">
									<b class="text_container">Location</b>
									<div class="column_container">									
										<h3 class="job_location">' . $sj -> jobLocation . '</h3><br />
									</div>
								</div>
								<div class="column description">
									<b class="text_container">Description</b>
									<div class="column_container">									
										<div class="job_description" ">' . $sj -> jobDescription . '</div>
									</div>
								</div>
								<a class="s_arrow arrow" href="?j=' . $sj -> jobId . '">></a>
							</div>
						';
				}

				foreach($sponsoredEmployer as $se){
					echo '	<div class="employer_holder" >
								<a class="employer_sponsored">SPONSORED EMPLOYER</a><br />
								<div class="column employer">
									<b class="text_container">Employer</b>
									<div class="column_container">
										<a class="employer_name" href="employer.php?e=' . $se -> employerId . '">' . $se -> employerName . '</a><br />
									</div>
								</div>
								<div class="column description">
									<b class="text_container">Description</b>
									<div class="column_container">
										<div class="employer_description" ">' . $se -> employerDescription . '</div>
									</div>
								</div>
							<a class="s_arrow arrow" href="employer.php?e=' . $se -> employerId .'">><a>
					</div>
					';
				}
			
				foreach($jobs as $j){
					echo '	<div class="job_holder" >
								<div class="column job">
									<b class="text_container">Job</b><br>
									<div class="column_container">									
										<a class="job_title" href="?j=' . $j -> jobId . '">' . $j -> jobTitle . '</a><br />
									</div>
								</div>
								<div class="column employer">
									<b class="text_container">Employer</b>
									<div class="column_container">									
										<a class="employer_name" href="employer.php?e=' . $sj -> employerId . '">' . $j -> employerName . '</a><br />
									</div>
								</div>
								<div class="column location">
									<b class="text_container">Location</b>
									<div class="column_container">									
										<h3 class="job_location">' . $j -> jobLocation . '</h3><br />
									</div>
								</div>
								<div class="column description">
									<b class="text_container">Description</b>
									<div class="column_container">									
										<div class="job_description" ">' . $j -> jobDescription . '</div>
									</div>
								</div>
								<a class="arrow" href="?j=' . $j -> jobId . '">></a>
							</div>
						';
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
		</div>
		<script src="client/js/functions.js?v=<?php echo time();?>" type="text/javascript"></script>
	</body>