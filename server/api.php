<?php

	// Load database
	include_once('jobquery_db.php');



	// Define "error handler"
	function returnError($message){
		$response = array(
			"status" => "Error",
			"message" => $message
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit();

	}


	// READ INPUT
	$req = json_decode(file_get_contents('php://input'), true);
	if(!$req) returnError("Bad input.");


	// READ ACTION
	if(!isset($req['action'])) returnError("No action requested.");
	$action = $req['action'];

	$response = array();



	switch($action){


		// REGISTER NEW USER
		case "register" :
		

			// Check that request has all required fields
			if(!isset($req['signup_request'])) returnError("No signup request provided.");
			$signup_request = $req['signup_request'];

			$fields = array("firstName", "lastName", "email", "password");
			foreach($fields as $f){
				if(!isset($signup_request[$f]) || $signup_request[$f] == '') returnError("Missing field:" . $f);
				$signup_request[$f] = mysqli_real_escape_string($db, $signup_request[$f]);
			}


			// Extract it
			extract($signup_request);


			// Additional validation tests...

			// Check first and last name for invalid characters.
			if(!preg_match("/^[a-zA-Z ]*$/", $firstName) || !preg_match("/^[a-zA-Z ]*$/", $lastName)){
				returnError("Illegal characters in first or last name");
			}

			// Check that email is valid.
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				returnError("Please provide a valid email.");
			}

			// Check that email is not already in the system.
			$sql = "SELECT * FROM users WHERE userEmail = '$email'";
			$result = mysqli_query($db, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck){
				returnError("That email is already taken.");
			}


			// We're good to go!

			// hash the password
			$hashedpwd = md5($password);

			// insert the user into the database
			$sqlnewUser = "INSERT INTO users (userEmail,userFirst,userLast,userPassword) VALUES ('$email','$firstName','$lastName','$hashedpwd')";
			mysqli_query($db, $sqlnewUser);
			$newUserId =  mysqli_insert_id($db);


			// Verify that we were able to create the user successfully.
			if(!$newUserId) {
				$error = "Database error: unable to create user.";
				if($debugMode) $error .= "\n\n" . $sqlnewUser;
				returnError($error);
			}


			// Define our success object!
			$response = array(
				"status" => "Success!",
				"insert_id" => $newUserId
			);
		break;


		// LOGIN USER
		case "login" :

			// Check that request has all required fields
			if(!isset($req['login_request'])) returnError("No login request provided.");
			$login_request = $req['login_request'];

			$fields = array("email", "password");
			foreach($fields as $f){
				if(!isset($login_request[$f]) || $login_request[$f] == '') returnError("Missing field:" . $f);
				$login_request[$f] = mysqli_real_escape_string($db, $login_request[$f]);
			}

			extract($login_request);

			$hashedpwd = md5($password);

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				returnError("Invalid email.");
			}



			// LOOK UP USER
			$sql = "SELECT * FROM users WHERE userEmail = '$email'";
			$result = mysqli_query($db, $sql);
			$resultCheck = mysqli_num_rows($result);
			if(!$resultCheck){
				returnError("User not found.");
			}

			if($user = mysqli_fetch_assoc($result)){

				if($user['userPassword'] != $hashedpwd) returnError("Incorrect password.");

				$_SESSION['user'] = $user;
				$response = array(
					"status" => "Success!",
					"message" => "Your session has been set on the server.",
					"user" => $user
				);
			}
		break;

		default :
			$returnError("Action not found.");
		break;

	}


	echo json_encode($response, JSON_PRETTY_PRINT);

