<?php 
		//connection 
	require 'app_config.php';

	//connect to database	
	mysql_select_db(DATABASE_NAME)
		or handle_error();
		
		
		//variables of users info

		$email = trim($_REQUEST['email']);
		$password = trim($_REQUEST['password']);
		$gamertag = trim($_REQUEST['gamertag']);
	//insert into database	
	$insert_sql = "INSERT INTO users (email, password, gamertag) VALUES ('{$email}', '{$password}', '{$gamertag}');";
	
	mysql_query($insert_sql)
		or die(mysql_error());
		
	header("Location: sign_up.php?user_id=" .mysql_insert_id());
	exit();



?>