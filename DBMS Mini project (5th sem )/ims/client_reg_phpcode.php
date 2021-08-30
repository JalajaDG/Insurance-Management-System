<?php
session_start();
$con = mysqli_connect("localhost","root","","ims");
error_reporting(0);
if(isset($_POST['submit']))
{
    $cname = $_POST['name'];
	$cid = $_POST['ID'];
	$age = $_POST['Age'];
	$gender = $_POST['maleorfemale'];
	$address = $_POST['Address'];
	$phone = $_POST['no'];
	$query = "insert into client values('$cname','$cid','$age ','$gender ','$address','$phone')";
	$result = mysqli_query($con,$query);
	if($result)
	{
    
	  header("Location:client_success.php");
	}
	else{
		
		header("Location:client_failed.php");
	}
}
?>