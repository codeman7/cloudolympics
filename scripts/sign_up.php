<?php

	//connection 
	require 'app_config.php';
	
	//connect to database	
	mysql_select_db(DATABASE_NAME)
		or handle_error();

	$user_id = $_REQUEST['user_id'];
	
	//select from database
	$select_query = "SELECT email, password, gamertag FROM users WHERE user_id = " . $user_id;
	
	//run the select query
	$result = mysql_query($select_query);
	
	if ($result) {
		$row = mysql_fetch_array($result);
		$email1 = $row['email'];
		$password1 = $row['password'];
		$gamertag1 = $row['gamertag'];
	} else {
		die ("Error locating the user with ID {$user_id}");
	}
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/register.css">
</head>
<body>
	<div class="header">
		<img src="../images/logo.gif">
	</div>
	<div class="container">
		<div class="form">
			<form method="POST" action="create_personal.php?user_id=<?php echo $user_id ?>" name="personal">
				<div class="so_far">
					<p class="progress">This is what we have so far.</p>
					<div class="email">
						<div class="left">
							<p>Email</p>
						</div>
						<div class="right">
							<p><?php echo $email1?></p>
						</div>
					</div>
					<div class="password">
						<div class="left">
							<p>Password</p>
						</div>
						<div class="right">
							<p><?php  echo $password1 ?></p>
						</div>
					</div>
					<div class="gamertag">
						<div class="left">
							<p>Gamertag</p>
						</div>
						<div class="right">
							<p><?php echo $gamertag1 ?></p>
						</div>
					</div>
				</div>
				<div class="optional">
					<p class="personal">This part is optional but makes for a better experience on the site</p>
					<div class="state">
						<div class="left">
							<p>What state do you live in?</p>
						</div>
						<div class="right">
							<select name="location">
								<option value="">Select One</option>
								<option value="AL">Alabama</option>
								<option value="AK">Alaska</option>		
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>	
								<option value="CA">California</option>
								<option value="CO">Colorado</option>		
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Misouri</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NV">Nevada</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NM">New Mexico</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="ND">North Dakota</option>
								<option value="OH">Ohio</option>
								<option value="OK">Oklahoma</option>
								<option value="OR">Oregon</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="SD">South Dakota</option>
								<option value="TN">Tennessee</option>
								<option value="TX">Texas</option>
								<option value="UT">Utah</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WA">Washington</option>
								<option value="WV">West Virginia</option>
								<option value="WI">Wisconsin</option>
								<option value="WY">Wyoming</option>
								<option value="NO">Non US</option>
							</select>
						</div>
					</div>
					<div class="age">
						<div class="left">
							<p>What year were you born?</p>
						</div>
						<div class="right">
							<select name="birthday">
								<option value="">Select One</option>
								<option value="1962">Before 1963</option>
								<option value="1963">1963</option>
								<option value="1964">1964</option>
								<option value="1965">1965</option>
								<option value="1966">1966</option>
								<option value="1967">1967</option>
								<option value="1968">1968</option>
								<option value="1969">1969</option>
								<option value="1970">1970</option>
								<option value="1971">1971</option>
								<option value="1972">1972</option>
								<option value="1973">1973</option>	
								<option value="1974">1974</option>
								<option value="1975">1975</option>
								<option value="1976">1976</option>
								<option value="1977">1977</option>
								<option value="1978">1978</option>
								<option value="1979">1979</option>
								<option value="1980">1980</option>
								<option value="1981">1981</option>
								<option value="1982">1982</option>
								<option value="1983">1983</option>
								<option value="1984">1984</option>
								<option value="1985">1985</option>
								<option value="1986">1986</option>
								<option value="1987">1987</option>
								<option value="1988">1988</option>
								<option value="1989">1989</option>
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">After 2003</option>
							</select>
						</div>
					</div>
							
					<div class="gametype">
						<div class="left">
							<p>What is your favorite gametype?</p>
						</div>
						<div class="right">
							<select name="gametype">
								<option value="">Select One</option>
								<option value="Team Death Match">Team Deathmatch</option>
								<option value="Domination">Domination</option>
								<option value="Search & Destroy">Search and Destroy</option>
								<option value="Demolition">Demolition</option>
								<option value="Kill Confirmed">Kill Confirmed</option>
								<option value="Hardpoint">Hardpoint</option>
								<option value="Headquarters">Headquarters</option>
								<option value="Capture the Flag">Capture the Flag</option>
							</select>
						</div>
					</div>
					<div class="goal">
						<div class="left">
							<p>Why do you play video games?</p>
						</div>
						<div class="right">
							<select name="goal">
								<option value="">Select One</option>
								<option value="good_kd">Good K/D</option>
								<option value="fun">Have fun</option>
								<option value="troll">Troll</option>
								<option value="win">Win</option>
							</select>
						</div>
					</div>
				</div>
				<div class="done">
				<input type="submit" value="Sign Up" class="submit" />
				</div>
			</form>
		</div>  
	</div>
	<div class="footer">
		<a href="about_us.html">About Us</a>
		<a href="example.html">Example Page</a>
	</div>
</body>
</html>
