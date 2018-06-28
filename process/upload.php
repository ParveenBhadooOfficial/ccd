<?php
if ($_POST['upload']) {
	move_uploaded_file($_FILES["file"]["tmp_name"], "../uploads/" .$_FILES["file"]["name"]);

	echo "Upload: " .$_FILES["file"]["name"]. "<br>";

	echo "Type: " .$_FILES["file"]["type"]. "<br>";

	echo "Size: " .($_FILES["file"]["size"] /1024). " KB<br>";

	echo "Store in: " .($_FILES["file"]["tmp_name"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Status</title>
</head>
<body>
	<br>
	<br>
<a href="/">Get Back to Website</a>
</body>
</html>