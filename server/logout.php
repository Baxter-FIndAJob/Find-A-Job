<?php

	if(isset($_POST['logout'])) {
		include('jobquery_db.php');

		session_start();
		session_unset();
		session_destroy();

		header("Location: ../login.php");
		exit();
	}else{
		header("Location: ..");
		exit();
	};
?>