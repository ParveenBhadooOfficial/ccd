			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li class="selected">
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
	<div id="contents">
		<div>
			<div class="body"  id="gallery">
				<h1>Gallery</h1>
				<div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>
      <div class="grid_12">
        <div class="car_wrap">
          <h2>Customer's Best Choices</h2>
          <a href="#" class="prev"></a><a href="#" class="next"></a>
          <ul class="carousel1">
            <li>
              <div><img src="images/gallery1.png" alt="" width="209px" height="131px">
              </div>
            </li>
            <li>
              <div><img src="images/gallery2.png" alt="" width="209px" height="131px">
              </div>
            </li>
            <li>
              <div><img src="images/gallery3.png" alt="" width="209px" height="131px">
              </div>
            </li>
            <li>
              <div><img src="images/gallery4.png" alt="" width="209px" height="131px">
              </div>
            </li>
            <li>
              <div><img src="images/gallery5.png" alt="" width="209px" height="131px">
              </div>
            </li>
            <li>
              <div><img src="images/gallery6.png" alt="" width="209px" height="131px">
              </div>
            </li>
            <li>
              <div><img src="images/gallery7.png" alt="" width="209px" height="131px">
              </div>
            </li>
            <li>
              <div><img src="images/gallery8.png" alt="" width="209px" height="131px">
              </div>
            </li>
            <li>
              <div><img src="images/gallery9.png" alt="" width="209px" height="131px">
              </div>
            </li>
            <li>
              <div><img src="images/gallery10.png" alt="" width="209px" height="131px">
              </div>
            </li>
            <li>
              <div><img src="images/gallery11.png" alt="" width="209px" height="131px">
              </div>
            </li>
          </ul>
        </div>
      </div>
			</div>
		</div>
	</div>