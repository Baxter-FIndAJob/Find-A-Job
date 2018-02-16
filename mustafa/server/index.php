<?php 

	// HOME PAGE - LIST EMPLOYERS


	// load our library of functions
	require('db_simple.php');


	// fetch jobs
	$sql = 'SELECT * FROM employers';
	$employers = get_list($sql);

	print_r($employers);
	
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link href="websitedesign.css" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet">
	</head>
	<body>

		<?php

			foreach($employers as $e){

				echo '<img src="images/employers/' . $e -> employerId . '.png" />';
				echo '<a href="employer.php?e=' . $e-> employerId . '"><b>' . $e -> employerName . '</b></a>

				<br /><br />';
			}

		?>

		
	</body>
</html>
