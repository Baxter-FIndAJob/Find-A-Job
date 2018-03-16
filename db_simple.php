<?php

	// connect to the database
	global $db;
	$db = new mysqli("localhost", "root", "root", "baxter_jobquery");


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