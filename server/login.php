<?php

	session_start();

	if(isset($_POST['login'])) {
		include('jobquery_db.php');

		$email = mysqli_real_escape_string($db, $_POST["login_email"]);
		$pwd = mysqli_real_escape_string($db, $_POST["login_password"]);

		// errors handeler
		if(empty($email) || empty($pwd)){
			header("Location: ../login.php?login=empty");
			exit();
		}else{
			$sqlemail = 'SELECT * FROM users WHERE userEmail = "$email"';
			$result = mysqli_query($db, $sqlemail);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck < 1){
				header("Location: ../login.php?login=emailinvalid");
				exit();
			}else{
				if($row = mysqli_fetch_assoc($result)){
					$hashedpwdCheck = password_verify($pwd, $row['userPassword']);
					if($hashedpwdCheck == false){
						header("Location: ../login.php?login=passwordinvalid");
						exit();
					}elseif($hashedpwdCheck == true){
						$_SESSION['u_Id'] = $row['userId'];
						$_SESSION['u_Email'] = $row['userEmail'];
						$_SESSION['u_First'] = $row['userFirst'];
						$_SESSION['u_Last'] = $row['userLast'];

						header("Location: ../login.php?login=success");
						exit();
					}
				}
			}
		}
	}else{
		header("Location: ../login.php");
		exit();
	}
?>