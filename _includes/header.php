<!DOCTYPE html>
	<head>
		<html lang="eng">
		<meta charset="UTF-8">
		<title>Job Query - Login</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet">
		<link rel="icon" type="/img/png" href="client/images/icons/search_img.png">
		<link href="client/css/headercss.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
		<link href="client/css/footercss.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
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
			<div class="bottom container">
				<div class="text_container left">
					<a class="text_content view_filter" onclick="filtertoggle(this);">FILTER SEARCH</a> 
					<a class="text_content view_jobs" href="index.php">VIEW JOBS</a>
					<a class="text_content view_companies">VIEW COMPANIES</a>
					<a class="text_content sponsorship">BECOME A SPONSOR</a>
					<a class="text_content work_permit">WORK PERMIT</a>
					<input type="text" class="search_content job_search" placeholder="Search by Job title" hidden="true" />
					<input type="text" class="search_content location_search" placeholder="Search by Location" hidden="true" />
				</div>
				<div class="text_container right">
					<a class="text_content blog">BLOG</a>
					<a class="text_content about">ABOUT</a>
					<a class="text_content faq" href="supportcenter.php">FAQ</a>
					<a class="text_content language">EN</a><img src="client/images/icons/globe_img.png" class="language_globe">
				</div>				
			</div>
		</div>

		<!-- TOPBAR HOLDER -->
		<div class="topbar-holder" hidden="true">
			

		</div>

		<script src="client/js/header.js?v=<?php echo time();?>" type="text/javascript"></script>