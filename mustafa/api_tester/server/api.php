<?php

	// load our library of functions
	require('db_simple.php');


	// READ INPUT
	$req = json_decode(file_get_contents('php://input'), true);
	if(!$req) exit("Bad input.");


	// READ ACTION
	if(!isset($req['action'])) exit("No action requested.");
	$action = $req['action'];


	switch($action){


		// 	→ List Jobs (newest to oldest)
		// @request: # of jobs (positive int).
		// @response: List of Jobs.
		case "ListJobs" :

			// Get requested number of jobs and make sure that it's a positive integer.
			if(!isset($req['num'])) exit("Please provide a num.");
			if(!is_int($req['num']) || $req['num'] <= 0) exit("Please provide a positive num");
			$num = $req['num'];


			// Write out sql statement.
			$sql = 	"SELECT * FROM jobs, employers
					\nWHERE jobs.employerId = employers.employerId 
					\nORDER BY jobId DESC 
					\nLIMIT " . $num;


			// fetch jobs
			$response = get_list($sql);


		break;




		// →  Filter Jobs (by location)
		// @request: Location (string). 
		// @response: List of Jobs.
		case "FilterJobsByJobLocation" :

			// Get requested location.
			if(!isset($req['location'])) exit('Provide a location.');
			$location = $req['location'];


			$sql = "SELECT * FROM jobs, employers
					\nWHERE jobs.employerId = employers.employerId
					\nAND jobLocation = '" . addslashes($location) . "'";

			echo $sql;

			// echo $sql;
			$response = get_list($sql);

		break;



		// → Filter Jobs (by employer)
		// @request: EmployerId (int) or EmployerName (string)
		// @response: List of Jobs.




		default :
			exit("Unfamiliar action.");

		break;


	}


	




	
	
	            
	// →  View Job (includes employer info)
	// @request: jobId (int)
	// @response: Job Object

	// → List Employers.
	// @request: # of employers (positive int)
	// @response: List of employers.






	echo json_encode($response, JSON_PRETTY_PRINT);





