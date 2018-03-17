<?php 

	// load our library of functions
	require('db_simple.php');

	// LOOK UP INFORMATION FOR A PARTICULAR EMPLOYER

	if(!isset($_GET['e'])) {
		echo "Please specify a particular employer.";
	}

	$employerId = $_GET['e'];

	// fetch employer
	$sqle = 'SELECT * FROM employers WHERE employerId = ' . $employerId;
	$employer = get_list($sqle);


	// fetch jobs
	$sqlj = 'SELECT * FROM jobs  WHERE employerId = ' . $employerId;
	$jobs = get_list($sqlj);
?>
