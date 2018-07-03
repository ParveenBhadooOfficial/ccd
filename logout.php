<!DOCTYPE html>
<!-- Designed By Parveen Kumar (www.parveenbhadoo.com) -->
<html>
<head>
	<title>Logout - Café Coffee Day</title>
<?php
require "./static/session.php";
require "./static/header.php";
require "./static/backend.logout.php";
require "./static/footer.php";
unset($_SESSION['sid']);
?>
</body>
</html>