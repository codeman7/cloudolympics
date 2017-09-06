<?php
	require 'app_config.php';

	//connect to database	
	mysql_select_db(DATABASE_NAME)
		or handle_error();
		
	$user_id = $_REQUEST['user_id'];
	
	//select from database
	$select_query = "SELECT gamertag, gametype FROM users WHERE user_id = " . $user_id;
	
	//run the select query
	$result = mysql_query($select_query);
	
	if ($result) {
		$row = mysql_fetch_array($result);
		$gamertag1 = $row['gamertag'];
		$gametype1 = $row['gametype'];

	} else {
		die ("Error locating the user with ID {$user_id}");
	}
	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cloud Olympics</title>
		<link rel="stylesheet" href="../css/join_clan.css">
		<link rel="stylesheet" href="../css/standard.css">
	</head>
	<body>
		<div class="header">
			<img src="../images/logo.gif"
		</div>
		<div class="join">
			<p class="search_header">What is the name of the clan you want to join?</p>
			<input type="text" class="input" name="search">
			<input type="submit" class="submit_join" value="Search">
		</div>
	</body>
</html>