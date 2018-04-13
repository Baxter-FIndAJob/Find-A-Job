<!DOCTYPE html>
	<head>
		<html lang="eng">
		<meta charset="UTF-8">
		<title>Job Query - Login</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet">
	</head>
	<body>
	<!-- HEADER -->
		<div class="header">
			<div class="top container">
				<?php
					if(isset($_SESSION['u_Id'])){
						echo '<div class="text_container right">
							<form action="server/logout.php" method="POST">
								<button type="submit" class="text_content logout" name="logout">LOGOUT</button>
							</form>
							</div>';
					}else{
						echo '<div class="text_container right">
								<a class="text_content login">LOGIN</a>
								<a class="text_content signup" href="login.php">SIGNUP</a>
							</div>';
					}
				?>		
			</div>