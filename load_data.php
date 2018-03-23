<?php

	
	// fetch employers
	$sqle = 'SELECT * FROM employers';
	$employers = get_list($sqle);



	// fetch jobs
	$sqlj = 	'SELECT * FROM jobs, employers
				WHERE jobs.employerId = employers.employerId 
				ORDER BY jobId DESC';

	$jobs = get_list($sqlj);

