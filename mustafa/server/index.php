<?php 

	// HOME PAGE - LIST EMPLOYERS


	// load our library of functions
	require('db_simple.php');


	// fetch jobs
	$sql = 'SELECT * FROM employers';
	$employers = get_list($sql);
	
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link href="websitedesign.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet">
	</head>
	<body>
		<div class="header">

		</div>
		<div class="job_holder">
		<?php
			foreach($employers as $e){

				echo '	<div class="employer employer_' . $e -> employerId . '">
							<img src="images/employers/' . $e -> employerId . '.png" />
							<a href="employer.php?e=' . $e-> employerId . '"><b>' . $e -> employerName . '</b></a>
						</div>
						';
			}

		?>
		</div>
	</body>
</html>
