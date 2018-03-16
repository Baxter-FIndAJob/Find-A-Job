<?php

	
	// fetch jobs
	$sqle = 'SELECT * FROM employers';
	$employers = get_list($sqle);




	$sqlj = 	'SELECT * FROM jobs, employers
				WHERE jobs.employerId = employers.employerId 
				ORDER BY jobId DESC';

	$jobs = get_list($sqlj);

	print_r($jobs);