<!DOCTYPE html>
<!-- Designed By Parveen Kumar (www.parveenbhadoo.com) -->
<html>
<head>
	<title>Signup - Café Coffee Day</title>
<?php
require "./static/session.php";
require "./static/header.php";
if ($_SESSION['sid']=="") {
	require "./static/backend.signup.form.php";
	}
	else{
	require "./static/backend.session.running.php";
	}
require "./static/footer.php";
?>
</body>
</html>