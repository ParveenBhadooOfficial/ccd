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
				<li class="selected">
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
	<div id="contents">
		<div>
			<div class="body" id="contact">
					<h1>Contact</h1>
					<p>
						Fillup the below form to contact us.
					</p>
					<form action="#" method="post">
						<h2>Name</h2>
						<input type="text" value="" placeholder="Enter Your Name Here">
						<h2>Email Address</h2>
						<input type="text" value="" placeholder="Enter Your Email Address Here">
						<h2>Contact Number</h2>
						<input type="text" value="" placeholder="Enter Your Number Here">
						<h2>Message</h2>
						<textarea placeholder="Enter Full Message Here"></textarea>
						<input type="submit" value="Send Message" class="btn1">
					</form>
			</div>
		</div>
	</div>