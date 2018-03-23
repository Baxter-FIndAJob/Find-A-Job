<?php

	// connect to the database
	global $db;

	// if we're in production...
	if(getcwd() == "/home/robkshar/jobquery.org") {

		$server = "localhost";
		$user 	= "robkshar_mtnbun";
		$pw 	= "b@xt3r";
		$db 	= "robkshar_jobquery";

		$db = new mysqli($server, $user, $pw, $db);
	}


	// run this locally...
	else {
		$db = new mysqli("localhost", "root", "root", "baxter_jobquery");	
	}



	/////////////////////////////////////////////////////////////////////////////


	// DEFINE BASIC DATA HANDLING OPERATIONS


	function get_list($sql){
		global $db;
		$result = $db -> query($sql);
		$list = array();
		if($result){
			while($list[] = $result -> fetch_object());
			unset($list[count($list) -1]);
		} 
		return $list;
	}