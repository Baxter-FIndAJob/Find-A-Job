<?php
	// fetch employers
	$sqle = 'SELECT * FROM employers';
	$employers = get_list($sqle);


	// fetch bussiness employers
	$sqlbe = 'SELECT * FROM employers
				WHERE business = "Yes"';
	$businessemployers = get_list($sqlbe);


	// fetch sponsored employers
	$sqlse = 'SELECT * FROM employers
				WHERE employerSponsor = "Yes"
				ORDER BY employerId DESC
				LIMIT 1';
	$sponsoredEmployer = get_list($sqlse);


	// fetch jobs

	$sqlj = 'SELECT * FROM jobs, employers
				WHERE jobs.employerId = employers.employerId 
				ORDER BY jobId DESC';

	$jobs = get_list($sqlj);


	// fetch sponsored jobs
	$sqlsj = 'SELECT * FROM jobs, employers
				WHERE jobs.employerId = employers.employerId
 				AND jobSponsor = "Yes"
 				ORDER BY jobId DESC
				LIMIT 1';

	$sponsoredJob = get_list($sqlsj);

	print_r($sponsoredJob);

?>
