<?php
session_start();
include("auth_session.php");
$con = mysqli_connect("localhost","root","","ims");
error_reporting(0);
if(isset($_POST['name']))
{
	$ename = $_POST['name'];
	$eid = $_POST['ID'];
	$age = $_POST['Age'];
	$gender = $_POST['maleorfemale'];
	$address = $_POST['Address'];
	$phone = $_POST['no'];
		$check = "select * from sign-up where email='$email'";
	$check_run = mysqli_query($con,$check);
	if(mysqli_num_rows($check_query)>0)
	{
		
		header("Location:emp_failed.php");
	}
	
	$query = "insert into employee values('$ename','$eid','$age ','$gender ','$address','$phone')";
	$result = mysqli_query($con,$query);
	if($result)
	{
   
	 $_SESSION['name'] = $ename;
	  header("Location:emp_success.php");
	  
	}
	else{
		
		header("Location:emp_failed.php");
	}
}
?>