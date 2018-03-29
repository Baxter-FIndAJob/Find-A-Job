<?php

	// READ INPUT
	$req = json_decode(file_get_contents('php://input'), true);
	if(!$req) exit("Bad input.");


	// READ ACTION
	if(!isset($req['action'])) exit("No action requested.");
	$action = $req['action'];

	$response = array();

	switch($action){

		case "test" :
			$response['message'] = "You requested the test api";
			$response['request'] = $req;
		break;


	}


	echo json_encode($response, JSON_PRETTY_PRINT);


	print_r($response);