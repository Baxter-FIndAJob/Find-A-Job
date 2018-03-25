<?php
	if(isset($_POST['register'])) {
		include_once('jobquery_db.php');

		$first = mysqli_real_escape_string($db, $_POST["signup_firstName"]);
		$last = mysqli_real_escape_string($db, $_POST["signup_lastName"]);
		$email = mysqli_real_escape_string($db, $_POST["signup_email"]);
		$pwd = mysqli_real_escape_string($db, $_POST["signup_password"]);

		// errors handeler
		if(!preg_match("/^[a-zA-Z ]*$/", $first) || !preg_match("/^[a-zA-Z ]*$/", $last)){
			header("Location: ../login.php?information=invalid");
			exit();
		}else{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: ../login.php?information=email");
			exit();
		}else{
			$sqlemail = 'SELECT * FROM users WHERE userEmail = "$email"';
			$result = mysqli_query($db, $sqlemail);
			$resultCheck = count($result);

		if ($resultCheck > 0){
        	header("Location: ../login.php?information=emailtaken%" . $resultCheck);
			exit();
		}else{
			// hashtag the password
				$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
				echo($hashedPwd);
			// insert the user into the database
				$sqlnewUser = "INSERT INTO users (userEmail,userFirst,userLast,userPassword) VALUES ('$email','$first','$last','$hashedPwd');";

				mysqli_query($db, $sqlnewUser);
				
				header("Location: ../login.php?information=complete%" . $resultCheck);
				exit();
		}
		 	}
		}
	}else{
		header("Location: ../login.php");
		exit();
	}
?>