<?php 


	// load our library of functions
	require('db_simple.php');


	// LOOK UP INFORMATION FOR A PARTICULAR EMPLOYER

	if(!isset($_GET['e'])) {
		echo "Please specify a particular employer.";
	}

	$employerId = $_GET['e'];

	// fetch employer
	$sql = 'SELECT * FROM employers WHERE employerId = ' . $employerId;
	$employer = get_list($sql)[0];

	print_R($employer);


	// fetch jobs
	$sql = 'SELECT * FROM jobs  WHERE employerId = ' . $employerId;
	$jobs = get_list($sql);

	print_r($jobs);

	
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link href="websitedesign.css" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet">
	</head>
	<body>



		<?php
			foreach($jobs as $j){
				echo 
					'	<div>
						<a href="?e=' . $j -> employerId . '">' . $j -> employerName . '</a><br />
						<a href="?j=' . $j -> jobId . '" style="font-style: italic">' . $j -> jobTitle . '</a><br />
						<div style="font-weight: bold">' . $j -> jobDescription . '</div></div>
						<br />';
			}
		?>
	</body>
</html>
