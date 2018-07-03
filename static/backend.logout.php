			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				<li>
					<a href="downloads.php">Downloads</a>
				</li>
				<li>
					<a href="profile.php">Profile</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<?php
				if ($_SESSION['sid']=="") {
					require "./static/backend.loginli.php";
				}
				else{
					require "./static/backend.logoutli.php";
				}
				?>
				</li>
			</ul>
		</div>
	</div>
<div style="height: 500px;">
			<br><br><br><br><br><br><br><br><br>
  	<center><p style="">Logout Successful, You will be redirected to homepage...</p></center>
  	<meta http-equiv="refresh" content="1;url=index.php" />
</div>