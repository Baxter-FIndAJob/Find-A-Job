<?php

	function get_list($db, $sql){
		$result = $db -> query($sql);
		$list = array();
		if($result){
			while($list[] = $result -> fetch_object());
			unset($list[count($list) -1]);
		} 
		return $list;
	}