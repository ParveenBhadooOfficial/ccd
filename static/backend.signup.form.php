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
		<center>
			<br><br><br>
		<div style="width: 700px; height: 400px;">
			<div class="loginform">
<form action="successful.php" method="POST" id="signupform">
  <div class="container1" style="background-image: url(./images/login-form-background.png);
	background-repeat: no-repeat;">
  	<center><font color="#FFF"><?php echo $err; ?></font></center>
  	<h3 style="color: #fff;">Create a Account</h3>
  	<input type="text" placeholder="Enter Full Name" name="fname" id="fullname">
    <input type="text" placeholder="Enter Username" name="usname" id="username">
    <input type="password" placeholder="Enter Password" name="pass" id="password">
    <input type="submit" value="Sign Up" id="buttonsignup">
    <p style="color: #fff;">Already have Account, <a href="login.php" style="color: #fff;">Login</a> here.</p>
  </div>
</form>
</table>
</div>
		</div>
		</center>