<?php
error_reporting(0);
require 'connection.php';
$err="";
if(!mysqli_select_db($con,'ccd'))
{
	echo "No Database Found, Please Reconfigure Database in connection.php";
}
session_start();
if(isset($_POST['signin']))
{
if($_POST['uname']=="" || $_POST['psw']=="")	
{
	$err="Enter Username and Password to Continue...";
}
else
{
$d=mysqli_query($con,"SELECT * FROM ccd where username='{$_POST['uname']}'");
$row=mysqli_fetch_object($d);
$fid=$row->username;
$fpass=$row->password;
$fname=$row->name;
if($fid==$_POST['uname'] && $fpass==$_POST['psw'])
{
$_SESSION['sid']=$fname;
header('location:profile.php');
}
else
{
$err="Username or Password entered is incorrect, Please try again...";
}
}
}
$status= "Welcome ".$_SESSION['sid'];
?>