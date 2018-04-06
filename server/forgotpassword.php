<?php

	if(isset($_POST['forgotpassword'])){
		include_once('jobquery_db.php');

		// locals
		$email = mysqli_real_escape_string($db, $_POST["reset_email"]);

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: ../login.php?email=failed%invalid%email");
			exit();
		}else{
			$sql = "SELECT * FROM users WHERE userEmail = '$email'";
			$result = mysqli_query($db, $sql);
			$resultCheck = mysqli_num_rows($result);

		if(!$resultCheck){
       		header("Location: ../resetpassword.php?reset=failed%invalid%information");
			exit();
		}else{
			$str = "0123456789!#%&AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";
			$strShuffle = str_shuffle($str);
			$newToken = substr($strShuffle, 0, 10);
			$url = "/'$newToken'";

			//email($mail,"Reset Password","To reset your password, click here or visit:'$url'")

			$db->query("UPDATE users SET userToken ='$newToken' WHERE userEmail = '$email'");

			mail($email,'Password Request Key', 'The following email has requested for a password change request key. Your key is: "$newToken",urmom@gmail.com');

			header("Location: ../resetpassword.php?");
			exit();
		}
	}
	}else{
		header("Location: ../login.php");
		exit();
	};
?>