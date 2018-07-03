<?php

require 'connection.php';
if(!mysqli_select_db($con,'ccd'))
{
	echo "No Database Found, Please Reconfigure Database in connection.php";
}
$tname=$_POST['fname'];
$user=$_POST['usname'];
$passwd=$_POST['pass'];
$sql="INSERT INTO ccd(name,username,password) VALUES('$tname','$user','$passwd')";
if(!mysqli_query($con,$sql))
{
	$successful="Account Creation Failed, Try again...";
}
else
{
	$successful="Registration Successful, You are login now...";
}
?>