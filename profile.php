<?php 


?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/profile.css">
		<title>Cloud Olympics</title>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	</head>
	
	<body>
		<div class="header">
			<img src="images/logo.gif" title="logo" alt="logo" class="head_logo">
			<a href="settings.html" class="head_settings">
				<img src="images/settings.gif" alt="home" class="head_set">
			</a>
			<form class="search">
				<input type="text" placeholder="Search">
			</form>
		</div>
		<div class="tour">
			<p>Take the tour</p>
		</div>
		<div class="site">
			<div class="username">
				<p>
					Hi, Codeman VII
				</p>
			</div>
		</div>
		<div class="leftcolumn">
			<div class="global">
				<img src="images/gamingred.gif" alt="gaming" title="gaming" class="wgaming">
				<img src="images/gaming.gif" alt="gaming" title="gaming" class="rgaming">
			</div>
		</div>
		<div class="leftcolumn">
			<div class="friend">
				<img src="images/friend.gif" alt="friends" title="friends" class="wfriends">
				<img src="images/friendwhite.gif" alt="friends" title="friends" class="rfriends">
			</div>
		</div>
		<div class="container_outside">
			<div class="global_container" id="container">
				<div class="item" id="item">
					<div class="item_first">
						<img src="images/update.gif" alt="update" title="update your status" class="update_image">
					</div>
				</div>
				<div class="item" id="item">
					<div class="item_id">
					</div>
					<div class="item_body">
					playing domination need 2
					</div>
					<div class="item_footer">
						<div class="item_footer_game">
						<img src="images/blackops2.jpg" alt="blackops2" title="game" class="item_game">
						</div>
						<div class="item_footer_name">
							<div class="item_name">
							Who posted it
							</div>
							<div class="item_date">
							<i>Mon 12:59 PM</i>
							</div>
						</div>
						<div class="item_footer_icons">
							<div class="item_footer_icons_like">
								<img src="images/comments.gif" class="comment" alt="comment" title="comment">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ads">
			
		</div>
		<div class="footer">
			<div class="foot">
			</div>
		</div>
<script>
/* Script for left column red or white and what container is active*/
$(".wgaming").click(function () {
      $(".friends_container,.wgaming,.rfriends").hide();
      $(".global_container,.rgaming,.wfriends").show();
    });
$(".wfriends").click(function () {
      $(".global_container,.rgaming,.wfriends").hide();
      $(".friends_container,.wgaming,.rfriends").show();
    });

/* Script for size of container and top bar */
function setSize () {
   var windowWidth = $(window).width();
	$(".container_outside,.site").width(windowWidth - 300);}
	$(window).resize(function () {
		setSize();
		setRatio();});
			setSize();

</script>
	</body>
</html>