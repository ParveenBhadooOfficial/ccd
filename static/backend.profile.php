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
				<li class="selected">
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
			<div class="body" id="blog">
						<border style="color: #fff;"><?php echo $status."<br><br>"; ?></border>
						<h1>File Upload (Complaints and Requests Only)</h1>
						<div id="uploadsdiv">
						<h3>Now you can send your complaints including files, You can upload your data files and content files here directly to us.</h3><br><br><br>
						<form action="process/upload.php" enctype="multipart/form-data" method="POST">
						Your File Name: <input type="file" name="file"><br><br><br>
						<input type="submit" name="upload" value="Upload" class="downloads">
						</form><br>
						<a href="https://play.google.com/store/apps/details?id=in.fourthlion.ccd.mobileapp&hl=en_IN&utm_source=BhadooMail_Com&utm_campaign=Bhadoo_Industries_Open_Source&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><div id="appdownload"></div></a>
						</div>

		</div>
	</div>
</div>