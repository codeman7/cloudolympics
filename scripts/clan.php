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
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<link rel="stylesheet" href="../css/clan.css">
	<link rel="stylesheet" href="../css/standard.css">
	<title>Cloud Olympics</title>
</head>
<body>
	<div class="header">
		<img src="../images/logo.gif" alt="logo" title="logo">
	</div>
	<div class="body">
			<a href="join_clan.php?user_id=<?php echo $user_id ?>">
				<div class="left_top">
					<p class="title">Join a Clan</p>
					<p class="content">If someone in your clan already created a clan click here to join your teammates</p>
				</div>
			</a>
			<a href="create_clan.php?user_id=<?php echo $user_id ?>">
				<div class="right_top">
					<p class="title">Create a Clan</p>
					<p class="content">If you are a clan leader then start your clan here so others can join</p>
				</div>
			</a>
			<a href="clan_search.php?user_id=<?php echo $user_id ?>">
				<div class="left_bottom">
					<p class="title">Search Clans</p>
					<p class="content">Click here if you want to search clans that have common interest with you</p>
				</div>
			</a>
			<a href="../profile.php?user_id=<?php echo $user_id ?>">
				<div class="right_bottom">
					<p class="title">Play Solo</p>
					<p class="content">We don't suggest this option but if you want you can go throughout the website solo and later join a clan</p>
				</div>
			</a>
	</div>
</body>
</html>