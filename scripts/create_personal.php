<?php
	//connection 
	require 'app_config.php';
	//connect to database	
	mysql_select_db(DATABASE_NAME)
		or handle_error();
		
		
	//variables of users info
	$user_id = $_REQUEST['user_id'];
	$location = $_REQUEST['location'];
	$birthday = $_REQUEST['birthday'];
	$gametype = $_REQUEST['gametype'];
	$goal = $_REQUEST['goal'];
	//update
	$insert_sql = "UPDATE users SET age='{$birthday}', location='{$location}', goal='{$goal}', gametype='{$gametype}' WHERE user_id = " . $user_id;


	mysql_query($insert_sql)
		or die (mysql_error());
		
	header("Location: clan.php?user_id=" . $user_id);
	exit();

?>
