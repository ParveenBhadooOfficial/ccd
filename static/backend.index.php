<ul id="navigation">
				<li class="selected">
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
	<div id="icontents">
		<div>
			<div class="body">
				<ul id="featured">
					<li>
						<div>
						 <img class="galleryimages" src="images/slider4.png" style="width:100%">
  						 <img class="galleryimages" src="images/slider3.png" style="width:100%">
  						 <img class="galleryimages" src="images/slider1.png" style="width:100%">
  						 <button class="w3-button w3-black button-display-left" onclick="plusDivs1(-1)">&#10094;</button>
  						 <button class="w3-button w3-black button-display-right" onclick="plusDivs1(1)">&#10095;</button>
						 </div>
					</li>
				</ul>
				<div id="adbox">
					<img src="images/cake.gif" alt="Black Forrest Cake"> <span class="info"> Black Forrest Cake <em>Rs.325</em> <a href="index.php" class="btn1">View Details</a> </span>
					<div class="details">
						<h1>Magical<br> Celebrations<br> #MakeItMagical</h1>
						<p>
							Café Coffee Day, a part of Coffee Day Global Limited, is India’s favourite hangout for coffee and conversations. Popularly known as CCD, we strive to provide the best experience to our guests. Our coffees are sourced from thousands of small coffee planters, who made us who we are today and we're glad to be a part of their lives.
						</p>
					</div>
				</div>
				<ul id="featured">
					<li>
						<div>
							<img src="images/cover.jpg" alt="Celebrations" > <a href="#"></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>