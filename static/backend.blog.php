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
				<li class="selected">
					<a href="downloads.php">Blog</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<input type="button" name="loginopen" id="loginopen" value="Login">
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div>
			<div class="body" id="blog">
						<h1>Downloads</h1>
						<div id="beverages"></div>
						<form method="POST" action="downloads/beverages.php">
						<input type="submit" name="download" value="Download" class="downloads">
						</form>
						<div id="food"></div>
						<form method="POST" action="downloads/food.php">
						<input type="submit" name="download" value="Download" class="downloads">
						</form>
		</div>
	</div>