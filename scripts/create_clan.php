<?php

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cloud Olympics</title>
		<link rel="stylesheet" href="../css/create_clan.css">
		<link rel="stylesheet" href="../css/standard.css">
	</head>
	<body>
		<div class="header">
			<img src="../images/logo.gif"
		</div>
			<div class="create">
				<p class="form">Last set of questions just some information we need to know about your clan.</p>
				<form method="POST" action="create_clan.php">
					<div class="name">
						<p>Most importantly what is your clan name?</p>
						<input type="text" name="clan_name" placeholder="Clan Name">
						<p class="note">* We don't allow underscores (_) to be in your clan name</p>
					</div>
					<div class="gametype">
						<p>Does your clan play just <?php echo $gametype1 ?> or all gametypes?</p>
						<input type="radio" name="gametype" value="yes">Just <?php echo $gametype1 ?>
						<input type="radio" name="gametype" value="no">No we play all gametypes
					</div>
					<div class="age">
						<p>What age range do you allow in your clan?</p>
						<select name="age">
							<option value="10-14">10-14</option>
							<option value="15-18">15-18</option>
							<option value="19-24">19-24</option>
							<option value="25-30">25-30</option>
							<option value="31-35">31-35</option>
							<option value="36-40">36-40</option>
							<option value="41-45">41-45</option>
							<option value="45+">45+</option>
						</select>
					</div>
					<div class="mic">
						<p class=>Do you require clan members to have a mic?</p>
						<input type="radio" name="mic" value="yes">Yes
						<input type="radio" name="mic" value="no">No
					</div>
					<div class="open">
						<p class=>Is your clan looking for members?</p>
						<input type="radio" name="open" value="yes">Yes
						<input type="radio" name="open" value="no">No
					</div>
					<input type="submit" value="Create Clan" class="submit_create">
				</form>
			</div>
	</body>
</html>