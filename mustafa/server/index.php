<?php 


	// load our library of functions
	require('db_simple.php');
	


	
	// connect to the database
	$db = new mysqli("localhost", "root", "root", "baxter_jobquery");



	// fetch jobs
	$sql = 'SELECT * FROM jobs, employers WHERE jobs.employerId = employers.employerId';

	if(isset($_GET['e'])) $sql .= ' AND jobs.employerId=' . $_GET['e'];
	if(isset($_GET['j'])) $sql .= ' AND jobs.jobId=' . $_GET['j'];


	$jobs = get_list($db, $sql);


	
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>



		<?php
			foreach($jobs as $j){
				echo '	<a href="?e=' . $j -> employerId . '">' . $j -> employerName . '</a><br />

						<a href="?j=' . $j -> jobId . '" style="font-style: italic">' . $j -> jobTitle . '</a><br />
				
						<div style="font-weight: bold">' . $j -> jobDescription . '</div>

						<br /><br /><br />';


			}
		?>
	</body>
</html>