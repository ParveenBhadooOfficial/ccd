<?php
require 'connection.php';
if(!mysqli_select_db($con,'newsletter'))
{
	echo "No Database Found.";
}
$email=$_POST['email'];
$sql="INSERT INTO person(email) VALUES('$email')";
if(!mysqli_query($con,$sql))
{
	$status= "Data could not be inserted.";
}
else
{
	$status= "Registration Successful, You are being sent to Homepage...";
}
header("refresh:5; url=index.php");
?>

<!DOCTYPE html>
<!-- Designed By Parveen Kumar (www.parveenbhadoo.com) -->
<html>
<head>
	<title>Newsletter - Café Coffee Day</title>
<?php
require './static/session.php';
require "./static/header.php";
require "./static/backend.newsletter.php";
require "./static/footer.php";
?>
</body>
</html>