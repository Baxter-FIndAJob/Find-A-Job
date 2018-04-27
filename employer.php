<?php
	
	// db
	require('server/jobquery_db.php');
	

	// get employer
	if(!isset($_GET['e'])) {
		echo "Please specify a particular employer.";
	}
	$employerId = $_GET['e'];
	extract(get_employer_data($employerId));



	require('_includes/header.php');
?>
		<link href="client/css/employer.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
		<!-- PAGE HOLDER - TEST -->
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
		</div>
</body>

<?php

	require('_includes/footer.php');

?>