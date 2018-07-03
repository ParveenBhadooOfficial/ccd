<!DOCTYPE html>
<!-- Designed By Parveen Kumar (www.parveenbhadoo.com) -->
<html>
<head>
	<title>Profile - Café Coffee Day</title>
<?php
require "./static/session.php";
require "./static/header.php";
if ($_SESSION['sid']=="") {
		require "./static/backend.login.php";
	}
	else{
	require "./static/backend.profile.php";
	}
require "./static/footer.php";
?>
</body>
</html>