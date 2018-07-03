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
<form action="login.php" method="POST" id="loginform">
  <div class="container1" style="background-image: url(./images/login-form-background.png);
	background-repeat: no-repeat;">
  	<h3 style="color: #fff;">Login to Continue</h3>
  	<center><font color="#FFF"><?php echo $err; ?></font></center>
    <input type="text" placeholder="Enter Username" name="uname" id="uname">
    <input type="password" placeholder="Enter Password" name="psw" id="psw">
    <label style="float: left;">
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>	
    <button type="submit" name="signin" value="signin" id="buttonlogin">Login</button>
    <p style="color: #fff;">No Account, <a href="signup.php" style="color: #fff;">Sign Up</a> here.</p>
  </div>
</form>
</table>
</div>
		</div>
		</center>